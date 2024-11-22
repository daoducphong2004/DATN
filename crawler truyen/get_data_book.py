import requests
import json
import os
import random
import time
from datetime import datetime, timedelta
from lxml import html
import re
# List of User-Agents
user_agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0"
]
headers = {
    'User-Agent': random.choice(user_agents)
}

# Generate random datetime
def random_created_at(start_date, end_date):
    random_seconds = random.randint(0, int((end_date - start_date).total_seconds()))
    random_time = start_date + timedelta(seconds=random_seconds)
    return random_time.strftime('%Y-%m-%d %H:%M:%S')

# Load links from JSON
def load_links_from_json(filename='link_book.json'):
    try:
        with open(filename, 'r', encoding='utf-8') as f:
            return json.load(f)
    except Exception as e:
        print(f"Error loading JSON file: {e}")
        return []

# Load XPaths from JSON
def load_xpaths_from_json(filename='Xpath_info_book.json'):
    try:
        with open(filename, 'r', encoding='utf-8') as f:
            return json.load(f)
    except Exception as e:
        print(f"Error loading XPath JSON file: {e}")
        return {}

# Function to download image and return the local path
def download_image(url, save_path):
    try:
        response = requests.get(url, headers=headers, stream=True)
        response.raise_for_status()
        os.makedirs(os.path.dirname(save_path), exist_ok=True)
        with open(save_path, 'wb') as f:
            for chunk in response.iter_content(1024):
                f.write(chunk)
        print(f"Image saved to {save_path}")
        return save_path  # Return the local path where the image is saved
    except Exception as e:
        print(f"Error downloading image: {e}")
        return None
# Function to extract book data using XPath
# Function to extract book data using XPath
def extract_book_data(url, xpaths):
    try:
        # Send a GET request to the book's detail page
        response = requests.get(url, headers=headers)
        response.raise_for_status()

        # Parse HTML with lxml
        tree = html.fromstring(response.content)

        # Dictionary to store extracted data
        book_data = {}

        # Iterate through the XPath dictionary and extract data
        for field, xpath in xpaths.items():
            result = tree.xpath(xpath)

            if result:
                if field == 'slug':
                    # Process slug and extract ID
                    slug = result[0] if isinstance(result[0], str) else result[0].get('href', '').strip()
                    id = slug.split('/')[2].split('-')[0]
                    new_slug = slug.replace('/truyen/', '')
                    book_data[field] = new_slug
                    book_data['id'] = id
                elif field == 'title':
                    book_data[field] = result[0] if isinstance(result[0], str) else result[0].text_content().strip()
                else:
                    book_data[field] = result[0].strip() if isinstance(result[0], str) else result[0].text_content().strip()
            else:
                book_data[field] = None

        # Extract the image URL from the background-image style attribute
        image_style = tree.xpath(xpaths.get("image_url", ""))  # Use the correct XPath for the image container
        if image_style:
            # Get the style attribute
            style = image_style[0].get("style", "")
            # Extract the URL using regular expression from the style attribute
            match = re.search(r"url\(['\"]?(.*?)['\"]?\)", style)
            if match:
                image_url = match.group(1)
                image_save_path = f"book_path/{book_data['id']}.jpg"  # Save image with book ID
                local_image_path = download_image(image_url, image_save_path)  # Download the image and return the local path
                if local_image_path:
                    book_data['image_url'] = local_image_path  # Store the local path in book_data

        return book_data

    except requests.exceptions.RequestException as e:
        print(f"Error fetching URL {url}: {e}")
        return None
# Save data to JSON
def save_data_to_json(book_data, filename='books_data.json'):
    try:
        existing_data = []
        if os.path.exists(filename):
            with open(filename, 'r', encoding='utf-8') as f:
                try:
                    existing_data = json.load(f)
                except json.JSONDecodeError:
                    print(f"Warning: {filename} is empty or corrupted. Starting with an empty list.")

        existing_data.append(book_data)
        with open(filename, 'w', encoding='utf-8') as f:
            json.dump(existing_data, f, ensure_ascii=False, indent=4)
        print(f"Data saved to {filename}")

    except Exception as e:
        print(f"Error saving data: {e}")

# Main function for crawling and saving data
def crawl_books():
    links = load_links_from_json()
    if not links:
        print("No links found.")
        return

    xpaths = load_xpaths_from_json()
    if not xpaths:
        print("No XPath data found.")
        return

    book_info = {
        'status': 1,
        'adult': 0,
        'type': 1,
        'group_id': 1,
        'Is_Inspect': 1,
        'user_id': 1,
    }

    delay = random.uniform(1, 5)

    for link in links:
        url = 'https://ln.hako.vn' + link['link']
        print(f"Fetching data for: {url}")
        book_info['created_at'] = random_created_at(datetime(2020, 1, 1), datetime(2024, 12, 31))
        book_data = extract_book_data(url, xpaths)

        if book_data:
            if book_data.get("image_path"):  # Ensure the 'image_path' is in book_data
                print(f"Image path: {book_data['image_url']}")  # Print to confirm it's there
            book_data.update(book_info)
            save_data_to_json(book_data)

        time.sleep(delay)

if __name__ == "__main__":
    crawl_books()
