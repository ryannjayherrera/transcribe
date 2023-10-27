<?php require 'net/http'
require 'json'
require 'rest-client'
require 'httparty'

# replace with your API token
YOUR_API_TOKEN = "ff3b6d9e043a46678b27c956b9fdb599";

# URL of the file to transcribe
FILE_URL = "https://github.com/AssemblyAI-Examples/audio-examples/raw/main/20230607_me_canadian_wildfires.mp3"

# You can also transcribe a local file by passing in a file path
# FILE_URL = './path/to/file.mp3';

# AssemblyAI transcript endpoint (where we submit the file)
transcript_endpoint = "https://api.assemblyai.com/v2/transcript"

# request parameters where speaker_labels has been enabled
data = {
  "audio_url" => FILE_URL,
  "speaker_labels" => true
}

# HTTP request headers
headers={
    "authorization" => ff3b6d9e043a46678b27c956b9fdb599,
    "content-type" => "application/json"
    }

# submit for transcription via HTTP request
uri = URI.parse(transcript_endpoint)
http = Net::HTTP.new(uri.host, uri.port)
http.use_ssl = true

request = Net::HTTP::Post.new(uri.request_uri, headers)
request.body = data.to_json

response = http.request(request)
transcript_id = JSON.parse(response.body)["id"]
polling_endpoint = "https://api.assemblyai.com/v2/transcript/#{transcript_id}"

while true
    polling_response = HTTParty.get(polling_endpoint, headers: headers)
    transcription_result = polling_response.parsed_response

    if transcription_result["status"] == "completed"
        # print the results
        puts transcription_result
        break
    elsif transcription_result["status"] == "error"
        raise "Transcription failed: #{transcription_result["error"]}"
    else
        sleep(3)
    end
end

?>