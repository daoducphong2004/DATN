import time
import requests
from bs4 import BeautifulSoup
import json

# Đọc dữ liệu từ file episode_data.json
with open('episode_data.json', 'r', encoding='utf-8') as file:
    episode_data = json.load(file)

# Thiết lập User-Agent giả (Fake User-Agent)
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'
}

# Retry function khi gặp lỗi 429
def get_data_with_retry(url, headers=None, max_retries=5):
    retries = 0
    while retries < max_retries:
        response = requests.get(url, headers=headers)
        if response.status_code == 200:
            return response
        elif response.status_code == 429:
            print("Lỗi 429: Quá nhiều yêu cầu. Đang chờ...")
            time.sleep(5 * retries)  # Tăng thời gian chờ sau mỗi lần thử lại
            retries += 1
        else:
            print(f"Lỗi khác: {response.status_code}. Đang dừng.")
            break
    return None

# Lưu dữ liệu tất cả các chương vào một danh sách chung
all_chapters = []

# Duyệt qua từng episode trong dữ liệu JSON
for episode in episode_data:
    book_id = episode["book_id"]
    slug = episode["slug"]

    # URL để lấy dữ liệu chapter
    url = f'https://ln.hako.vn/truyen/{book_id}/{slug}'

    # Sử dụng retry để lấy dữ liệu
    response = get_data_with_retry(url, headers=headers)
    
    if response:
        # Phân tích HTML nếu phản hồi thành công
        soup = BeautifulSoup(response.content, 'html.parser')

        # Tìm tất cả các phần tử chứa thông tin chương
        chapters = soup.select('section.ln_chapters-volume ul.list-chapters li')

        chapter_data = []

        # Duyệt qua từng chương và trích xuất thông tin
        for chapter in chapters:
            chapter_info = {}

            # Lấy id, title, slug, url từ mỗi chương
            title_tag = chapter.select_one('.chapter-name a')
            chapter_info['title'] = title_tag.text.strip() if title_tag else 'N/A'
            chapter_info['url'] = title_tag['href'] if title_tag else 'N/A'
            chapter_info['slug'] = chapter_info['url'].split('/')[-1]  # lấy slug từ URL
            chapter_info['book_id'] = book_id
            chapter_info['episode_id'] = episode["id"]
            chapter_info['id'] = chapter_info['slug'].split('-')[0][1:]  # lấy ID từ slug và loại bỏ "c"

            chapter_data.append(chapter_info)

        # Thêm các chương vào danh sách chung
        all_chapters.extend(chapter_data)

        # Thêm một khoảng thời gian chờ 1 giây giữa các yêu cầu
        time.sleep(3)  # Thời gian chờ 1 giây giữa các yêu cầu
    else:
        print(f"Không thể lấy dữ liệu từ {url}. Lỗi: {response.status_code}")

# Lưu tất cả các chương vào file JSON
with open('link_chapter.json', 'w', encoding='utf-8') as output_file:
    json.dump(all_chapters, output_file, ensure_ascii=False, indent=4)

print("Đã lưu tất cả dữ liệu chương vào link_chapter.json")
