import requests
from bs4 import BeautifulSoup
import json
import os

def simple_crawler(url):
    try:
        # Gửi yêu cầu HTTP GET tới URL
        response = requests.get(url)
        response.raise_for_status()  # Kiểm tra lỗi HTTP

        # Sử dụng BeautifulSoup để phân tích nội dung HTML
        soup = BeautifulSoup(response.text, 'html.parser')

        # Lấy tiêu đề trang
        title = soup.title.string if soup.title else 'No title found'
        print("Title:", title)

        # Tạo một danh sách để lưu các link và title truyện
        books_data = []

        # Tìm tất cả các thẻ <a> chứa liên kết truyện
        links = soup.select('div.thumb_attr.series-title a')

        # Lấy liên kết và tiêu đề cho mỗi truyện
        for link in links:
            href = link.get('href')
            if href and '/c-' not in href:
                book_info = {
                    'title': link.get('title', 'No title available'),
                    'link': href
                }
                books_data.append(book_info)

         # Đọc dữ liệu cũ từ file (nếu có) và xử lý trường hợp file rỗng hoặc không hợp lệ
        if os.path.exists('link_book.json'):
            try:
                with open('link_book.json', 'r', encoding='utf-8') as f:
                    existing_data = json.load(f)
            except json.JSONDecodeError:
                # Nếu file không hợp lệ, khởi tạo existing_data là một danh sách trống
                existing_data = []
        else:
            existing_data = []

        # Kết hợp dữ liệu cũ và dữ liệu mới
        combined_data = existing_data + books_data

        # Lưu dữ liệu kết hợp vào file JSON
        with open('link_book.json', 'w', encoding='utf-8') as f:
            json.dump(combined_data, f, ensure_ascii=False, indent=4)

    except requests.exceptions.RequestException as e:
        print("Error fetching the URL:", e)

# Sử dụng crawler
url = "https://ln.hako.vn/danh-sach?page=2"  # Thay URL này bằng trang bạn muốn crawl

simple_crawler(url)
