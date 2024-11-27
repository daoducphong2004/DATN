import json

# Đọc dữ liệu từ file JSON
with open('book_data3.json', encoding="utf-8") as file:
    data = json.load(file)

# Lặp qua danh sách và cộng 1 cho trường 'id' của từng đối tượng
for item in data:
    # Chuyển id từ string sang int, cộng 1 và chuyển lại thành string
    item['id'] = str(int(item['id']) + 30)
# Ghi lại dữ liệu vào file JSON
with open('episode_data3.json', 'w') as file:
    json.dump(data, file, indent=4)
print("Cập nhật thành công!")
