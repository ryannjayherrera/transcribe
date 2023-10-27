<!DOCTYPE html>
<html>
<head>
    <title>Audio File Uploader</title>
</head>
<body>
    <h1>Upload an Audio File</h1>
    <input type="file" id="audioFileInput" onchange="getFileInfo()" />
    <p>File Name: <span id="fileName"></span></p>
    <p>Audio Format: <span id="audioFormat"></span></p>
    <p>Audio Duration: <span id="audioDuration"></span> minutes</p>
    <p>File Size: <span id="fileSize"></span> MB</p>
    <p id="formatValidation"></p>

    <script>
        function getFileInfo() {
            const audioFileInput = document.getElementById('audioFileInput');
            const fileNameSpan = document.getElementById('fileName');
            const audioFormatSpan = document.getElementById('audioFormat');
            const audioDurationSpan = document.getElementById('audioDuration');
            const fileSizeSpan = document.getElementById('fileSize');
            const formatValidation = document.getElementById('formatValidation');

            if (audioFileInput.files.length > 0) {
                const file = audioFileInput.files[0];

                // Get the file name
                const fileName = file.name;
                fileNameSpan.innerText = fileName;

                // Get the audio format (file extension)
                const fileExtension = fileName.split('.').pop();
                audioFormatSpan.innerText = '.' + fileExtension;

                // Check if it's one of the allowed formats
                const allowedFormats = ['mp3', 'mp4', 'mpeg', 'mpga', 'm4a', 'wav', 'webm'];
                const isAllowedFormat = allowedFormats.includes(fileExtension.toLowerCase());

                if (isAllowedFormat) {
                    formatValidation.innerText = 'Valid audio format';
                } else {
                    formatValidation.innerText = 'Invalid audio format. Please select a valid audio file.';
                }

                // Use the Web Audio API to get the audio duration
                const audioElement = new Audio();
                audioElement.src = URL.createObjectURL(file);
                audioElement.onloadedmetadata = function() {
                    const duration = audioElement.duration;
                    const durationMinutes = (duration / 60).toFixed(2);
                    audioDurationSpan.innerText = durationMinutes + ' minutes';
                };

                // Get the file size in megabytes (MB)
                const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                fileSizeSpan.innerText = fileSizeMB + ' MB';
            } else {
                fileNameSpan.innerText = 'No file selected';
                audioFormatSpan.innerText = '';
                audioDurationSpan.innerText = '';
                fileSizeSpan.innerText = '';
                formatValidation.innerText = '';
            }
        }
    </script>
</body>
</html>
