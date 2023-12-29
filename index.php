<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <script>
    // Function to fetch text from a given URL
    function fetchText(url) {
      return new Promise((resolve, reject) => {
        $.ajax({
          url: url,
          dataType: 'text',
          success: resolve,
          error: reject
        });
      });
    }

    // GitHub API endpoint to create or update files
    const apiUrl = "https://api.github.com/repos/your-username/your-repo/contents/";

    // URLs to fetch texts from
    const url1 = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin";

    // File paths on GitHub
    const filePath1 = "file1.txt";
    const filePath2 = "file2.txt";
    const filePath3 = "file3.txt";

    // Fetch text from URL1 and save it in file1.txt
    fetchText(url1)
      .then(text => {
        const file1Content = btoa(text); // Encode text content in base64

        // Create or update file1.txt on GitHub
        $.ajax({
          url: apiUrl + filePath1,
          type: 'PUT',
          dataType: 'json',
          data: JSON.stringify({
            message: 'Updated file1.txt',
            content: file1Content
          }),
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer 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");
          },
          success: function(result) {
            console.log("file1.txt saved successfully");
          },
          error: function(error) {
            console.error("Error saving file1.txt:", error);
          }
        });

        // Save the same content in file2.txt and file3.txt
        // Update the 'filePath2' and 'filePath3' values accordingly
        $.ajax({
          url: apiUrl + filePath2,
          type: 'PUT',
          dataType: 'json',
          data: JSON.stringify({
            message: 'Updated file2.txt',
            content: file1Content
          }),
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer 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");
          },
          success: function(result) {
            console.log("file2.txt saved successfully");
          },
          error: function(error) {
            console.error("Error saving file2.txt:", error);
          }
        });

        $.ajax({
          url: apiUrl + filePath3,
          type: 'PUT',
          dataType: 'json',
          data: JSON.stringify({
            message: 'Updated file3.txt',
            content: file1Content
          }),
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer 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");
          },
          success: function(result) {
            console.log("file3.txt saved successfully");
          },
          error: function(error) {
            console.error("Error saving file3.txt:", error);
          }
        });
      })
      .catch(error => {
        console.error("Error fetching text from URL1:", error);
      });
  </script>
</body>
</html>
