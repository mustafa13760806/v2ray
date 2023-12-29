<?php
// Function to retrieve text from the given URL
function getTextFromURL($url) {
  $text = file_get_contents($url);
  return $text;
}

// URLs to fetch text from
$url1 = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin";
$url2 = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin";
$url3 = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin";

// Fetch text from each URL
$text1 = getTextFromURL($url1);
$text2 = getTextFromURL($url2);
$text3 = getTextFromURL($url3);

// Save text to files
file_put_contents('file1.txt', $text1);
file_put_contents('file2.txt', $text2);
file_put_contents('file3.txt', $text3);

// GitHub credentials and repository details
$githubUsername = 'mustafa13760806';
$githubPassword = 'n58nneawyraj7kd';
$repositoryOwner = 'mustafa13760806';
$repositoryName = 'v2ray';

// Commit and push changes to GitHub
$commitMessage = 'Updated files';
$baseGitURL = "https://{$githubUsername}:{$githubPassword}@github.com/{$repositoryOwner}/{$repositoryName}.git";

// Function to execute shell commands
function executeShellCommand($command) {
  $output = shell_exec($command);
  echo $output;
}

// Change directory to the local repository
chdir('/path/to/your/local/repo');

// Commit and push changes to GitHub
executeShellCommand("git add file1.txt file2.txt file3.txt");
executeShellCommand("git commit -m '{$commitMessage}'");
executeShellCommand("git pull {$baseGitURL}");
executeShellCommand("git push {$baseGitURL}");

echo "Files successfully updated on GitHub
";
?>
