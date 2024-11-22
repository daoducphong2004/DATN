import json
import requests
import time
from bs4 import BeautifulSoup

# Hàm lấy nội dung chapter từ URL, bao gồm thẻ <p> và cấu trúc HTML
def get_chapter_content(url):
    # Tạo URL đầy đủ từ URL gốc
    full_url = f"https://ln.hako.vn{url}"  # Thay thế "yourwebsite.com" bằng trang web thực tế

    # Thêm User-Agent để tránh bị chặn
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'
    }

    try:
        # Gửi yêu cầu GET đến URL
        response = requests.get(full_url, headers=headers)

        # Kiểm tra nếu mã trạng thái trả về là 429 (Quá tải yêu cầu)
        if response.status_code == 429:
            print(f"Lỗi 429: Quá tải yêu cầu. Đang đợi 30 giây trước khi thử lại...")
            time.sleep(30)  # Đợi 30 giây trước khi thử lại
            return get_chapter_content(url)  # Thử lại

        if response.status_code == 200:
            # Phân tích HTML với BeautifulSoup
            soup = BeautifulSoup(response.text, 'html.parser')
            
            # Lấy toàn bộ nội dung từ thẻ chapter-content
            chapter_content = soup.find('div', id='chapter-content')
            
            # Nếu tìm thấy nội dung, trả về toàn bộ mã HTML bên trong thẻ chapter-content
            if chapter_content:
                return str(chapter_content)  # Trả về mã HTML nguyên vẹn
            else:
                return "Nội dung không tìm thấy."
        else:
            return f"Lỗi {response.status_code} khi tải trang."
    except Exception as e:
        return f"Đã xảy ra lỗi: {e}"

# Hàm để lưu dữ liệu vào file chapter_data.json
def save_chapter_data_to_file(chapter_data):
    # Lưu dữ liệu vào file chapter_data.json
    with open('chapter_data.json', 'w', encoding='utf-8') as file:
        json.dump(chapter_data, file, ensure_ascii=False, indent=4)
    print("Dữ liệu đã được lưu vào file chapter_data.json.")

# Hàm chính để xử lý lấy dữ liệu và lưu vào file
def process_chapters():
    # Mở file link_chapter.json
    with open('link_chapter.json', 'r', encoding='utf-8') as file:
        chapters = json.load(file)

    # Danh sách để lưu thông tin chương đã lấy
    chapter_data = []

    for chapter in chapters:
        # Thêm thời gian chờ ngắn giữa các yêu cầu để tránh lỗi 429
        time.sleep(2)  # Đợi 1 giây trước khi tiếp tục yêu cầu

        # Lấy nội dung chapter
        content = get_chapter_content(chapter['url'])
        
        # Tính số từ (word_count) của nội dung
        word_count = len(content.split()) if content else 0

        # Thêm content và word_count vào dữ liệu của chương
        chapter['content'] = content
        chapter['word_count'] = word_count
        
        # Thêm chương vào danh sách
        chapter_data.append(chapter)
        print('xong chương')
    # Lưu dữ liệu vào file
    save_chapter_data_to_file(chapter_data)

# Chạy hàm chính
if __name__ == "__main__":
    process_chapters()
