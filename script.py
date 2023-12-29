import requests
from git import Repo

# Make a request to the website
response = requests.get('https://raw.githubusercontent.com/mustafa13760896/v2ray/main/Matin')
# Replace 'http://your_website.com' with your actual URL

# Write the content to file1.txt, file2.txt, and file3.txt
files_to_commit = ['file1.txt', 'file2.txt', 'file3.txt']
for file in files_to_commit:
    with open(file, 'w') as f:
        f.write(response.text)

# Specify local path where the repository is located
local_repo = 'https://github.com/mustafa13760806/v2ray/main' 
# Replace '/path/to/your/repo' with your local path to your repository

# Create a Repo object
repo = Repo(local_repo)

# Check for changes, commit and push for each changed file
for file in files_to_commit:
    changed_files = [item.a_path for item in repo.index.diff(None) if item.a_path == file]
    if file in changed_files:
        repo.git.add(file)
        repo.git.commit('-m', f'Updated {file}')
        repo.git.push()
