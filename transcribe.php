<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
        }

        input[type="file"] {
            position: absolute;
            z-index: -1;
            top: 15px;
            left: 20px;
            font-size: 17px;
            color: #b8b8b8;
        }

        .button-wrap {
            position: relative;
        }

        .button {
            display: inline-block;
            outline: 0;
            border: 0;
            cursor: pointer;
            background-color: #4299e1;
            border-radius: 50px;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: 700;
            color: white;
            line-height: 26px;
        }

        .button:hover {
            background-color: #00ab97;
        }
    </style>

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Words</div>
            </div>

            <div class="iconBx">
                <ion-icon name="code-working-sharp"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"><span id="audioDuration"></div>
                <div class="cardName">Duration</div>
            </div>

            <div class="iconBx">
                <ion-icon name="stopwatch-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"><span id="fileSize"></span></div>
                <div class="cardName">Size</div>
            </div>

            <div class="iconBx">
                <ion-icon name="server-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"><span id="audioFormat"></div>
                <div class="cardName">Format</div>
            </div>

            <div class="iconBx">
                <ion-icon name="radio"></ion-icon>
            </div>
        </div>

    </div>
    <div class="details">
        <div class="transcribeResults">
            <div class="cardHeader">
                <label class="button" for="audioFileInput">Browse Audio File</label>
                <input type="file" id="audioFileInput" onchange="getFileInfo()" />

                <h2>RESULTS</h2>
                <button class="btn" onclick="">Download</button>
            </div>
            <br />
            <br />
            <div class="scroll">
                <br />
                <p>[00:00.000 --> 00:06.000] Good morning and welcome to day two of the annual banking and financial services conference.
                    <br />[00:07.000 --> 00:09.000] It's my pleasure to have all of you here.
                    <br />[00:10.000 --> 00:15.000] Why don't I start off by maybe asking both of you, Johnny and Selena?
                    <br />[00:16.000 --> 00:24.000] People on the sell side like me and investors have been focused on this whole operating leverage thing for such a long time.
                    <br />[00:24.000 --> 00:35.000] And at the same time, we certainly want to make sure that the stuff that you are eliminating is inefficiency as opposed to investment for growth.
                    <br />[00:36.000 --> 00:45.000] What was the process that you went through in order to make sure that what you were eliminating was a waste as opposed to the real growth spending?
                    <br />[00:46.000 --> 00:50.000] We're actually doing two things, Nicole, and working on the two dimensions at the same time.
                    <br />[00:51.000 --> 00:52.000] First of all, expense management.
                    <br />[00:52.000 --> 00:55.000] Expense management is more than just expense management.
                    <br />[00:56.000 --> 01:02.000] It should be cost management because it also includes defining what is the right level and number of people that you need in any operation.
                    <br />[01:03.000 --> 01:05.000] So we look at headcount as well.
                    <br />[01:06.000 --> 01:10.000] So that's what we call expense management and that should yield results in the short term.
                    <br />[01:11.000 --> 01:15.000] The second one is through re-engineering and even more that business transformation.
                    <br />[01:15.000 --> 01:17.000] For that we have the possibility of doing it.
                    <br />[01:18.000 --> 01:29.000] Now that we are moving to a global operating platform based on a unique IT platform for the core systems, for internet, for mobile, everything is going to be global.
                    <br />[01:30.000 --> 01:32.000] And if you have one system, this is the power of one.
                    <br />[01:33.000 --> 01:37.000] You can actually save a lot of money from having different software groups in different countries developing and adjusting systems.
                    <br />[01:38.000 --> 01:41.000] You have to have, of course, a very robust global governance system.
                    <br />[01:41.000 --> 01:48.000] We have created that over the last year through the Global Consumer Council, so both expense management and re-engineering.
                    <br />[01:49.000 --> 01:52.000] Now, the key question is, what is it for our people?
                    <br />[01:53.000 --> 01:57.000] How do we actually motivate them to actually focus on expense management and re-engineering?
                    <br />[01:58.000 --> 02:05.000] Well, by basically promising that any savings that we have from our current cost base will be reinvested in revenue generating opportunities.
                    <br />[02:06.000 --> 02:16.000] So it's creating the discipline from within the company and changing the culture so that all are motivated to really go and do their best in terms of operating efficiency and business transformation.
                    <br />[02:17.000 --> 02:23.000] So that they can have more resources to continue to invest in what they deem to be revenue generating activities.
                    <br />[02:24.000 --> 02:27.000] Those projects, those initiatives are, of course, considered at the global level.
                    <br />[02:27.000 --> 02:36.000] This is the one governance process because we want to make sure that we invest in those opportunities to offer the best returns on Basel III.
                    <br />[02:37.000 --> 02:42.000] Going forward, quite clearly, and generate the best earningable for our shareholders.
                    <br />[02:43.000 --> 02:51.000] And the same process that Johnny describes for consumers, we extend to the entire form.
                    <br />[02:51.000 --> 03:08.000] You know, our approach is, every business is expected to generate somewhere between 3-5% efficiency saves in their expense base every year, and we take that into the budget.
                    <br />[03:09.000 --> 03:17.000] And to the extent that we are able to deliver those efficiency saves, there's more dollars to invest.
                    <br />[03:17.000 --> 03:42.000] Now, recognizing coming out of 2008-2009, where we had significantly cutback, and part of what drove the negative operating leverage that you saw during the latter part of 2010 and the early part of 2011,
                    <br />[03:43.000 --> 03:51.000] we decided to invest in advance of generating all those expenses.
                    <br />[03:52.000 --> 04:17.000] So if you look at some of the material that we've put out this year through the third quarter, for the full firm, we would have had incremental investment spending of about USD 2.8 billion, which has been about half paid by those efficiency saves.
                    <br />[04:18.000 --> 04:31.000] So we've already taken out about USD 1.4 billion of the expense base through the third quarter of this year, full firm.
                    <br />[04:32.000 --> 04:41.000] So we've been in a mode of invest first, get the expense saves, and see where the revenue comes.
                    <br />[04:42.000 --> 04:55.000] Now that we've made the initial investment dollars, we've moved much more onto the scenario than Johnny's laid out.
                    <br />[04:56.000 --> 05:10.000] Where in the future, it will be more how much you do you save becomes how much of investment dollars you actually have for the firm.
                    <br />[05:11.000 --> 05:20.000] And thus, what's generating then that move back towards that positive operating leverage?
                </p>
            </div>
        </div>
    </div>
    <p id="fileSizeLabel" style="display:none"><span id="fileName"></span></p>
    <span id="audioFormat"></span>
    <span id="audioDuration"></span>
    <span id="fileSize"></span>
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
                    formatValidation.innerText = '';
                } else {
                    formatValidation.innerText = 'Invalid audio format. Please select a valid audio file.';
                }

                // Use the Web Audio API to get the audio duration
                const audioElement = new Audio();
                audioElement.src = URL.createObjectURL(file);
                audioElement.onloadedmetadata = function() {
                    const duration = audioElement.duration;
                    const durationMinutes = (duration / 60).toFixed(2);
                    audioDurationSpan.innerText = durationMinutes + ' Min';
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