import requests
from bs4 import BeautifulSoup
import json
import os

# Load the list of books from link_book.json
with open("link_book.json", "r", encoding="utf-8") as file:
    books = json.load(file)

# Create a directory to save images if it doesn't exist
image_dir = "episode_path"
os.makedirs(image_dir, exist_ok=True)

# Initialize a list to hold all episodes for each book
all_episodes = []

# Loop through each book link in link_book.json
for book in books:
    title = book["title"]
    link = book["link"]
    book_id = link.split("/")[2].split("-")[0]  # Extract book ID from the link

    # Full URL for the book page
    page_url = f"https://ln.hako.vn{link}"

    # Fetch the page content
    response = requests.get(page_url)
    soup = BeautifulSoup(response.text, 'html.parser')

    # Locate all volume sections
    volume_sections = soup.select("section.volume-list.at-series.basic-section.volume-mobile.gradual-mobile")

    # Loop through each volume to extract data
    for volume_section in volume_sections:
        header = volume_section.find('header', id=True)
        volume_id = header['id'].replace("volume_", "") if header else None

        volume_cover_link = volume_section.find('div', class_='volume-cover').find('a')['href']
        slug = volume_cover_link.split("/")[-1]

        volume_title = volume_section.find('span', class_='sect-title').text.strip()

        cover_div = volume_section.find('div', class_='content img-in-ratio')
        cover_url = cover_div['style'].split("url('")[1].split("')")[0]

        # Attempt to download the cover image
        try:
            image_response = requests.get(cover_url)
            image_response.raise_for_status()  # Raise an error for bad status codes
            image_path = f"{image_dir}/{slug}.jpg"
            with open(image_path, 'wb') as f:
                f.write(image_response.content)
        except (requests.exceptions.RequestException, IOError) as e:
            print(f"Failed to download image for {volume_title}: {e}")
            image_path = "episode_path/no-cover.jpg"  # Use a placeholder image path

        # Add episode data with default values for user_id and order
        episode_data = {
            "id": volume_id,
            "book_id": book_id,
            "slug": slug,
            "episode_path": image_path,
            "title": volume_title,
            "user_id": 1,    # Default user_id
            "order": 1       # Default order
        }

        all_episodes.append(episode_data)

# Save all episodes data to JSON
with open("episode_data.json", "w", encoding="utf-8") as json_file:
    json.dump(all_episodes, json_file, ensure_ascii=False, indent=4)

print("Data saved to episode_data.json")
