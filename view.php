<html>

<Link rel="stylesheet" type="text/css" href="h5p-php-library\styles\h5p.css" />
<script src="h5p-php-library\js\jquery.js"></script> 
<script src="h5p-php-library\js\h5p.js"></script>
<script src="h5p-php-library\js\h5p-event-dispatcher.js"></script>
<script src="h5p-php-library\js\h5p-x-api-events.js"></script>
<script src="h5p-php-library\js\h5p-x-api.js"></script>
<script src="h5p-php-library\js\h5p-content-type.js"></script>
<script src="h5p-library\h5p-resizer.js" charset="UTF-8"></script>
<script>



window.H5PIntegration = {
  "baseUrl": "localhost", 
  "url": "", 
  "postUserStatistics": false, 
  
  "ajaxPath": "/path/to/h5p-ajax"     
  "ajax": {
 
    "setFinished": "/interactive-contents/123/results/new", 

    "contentUserData": "/interactive-contents/:contentId/user-data?data_type=:dataType&subContentId=:subContentId"
  },
 
  "saveFreq": false, 
  
  "user": { 
    "name": "User Name",
    "mail": "user@mysite.com"
  },
  
  "siteUrl": "localhost", 
  "l10n": { 
    "H5P": { 
      "fullscreen": "Fullscreen",
      "disableFullscreen": "Disable fullscreen",
      "download": "Download",
      "copyrights": "Rights of use",
      "embed": "Embed",
      "size": "Size",
      "showAdvanced": "Show advanced",
      "hideAdvanced": "Hide advanced",
      "advancedHelp": "Include this script on your website if you want dynamic sizing of the embedded content:",
      "copyrightInformation": "Rights of use",
      "close": "Close",
      "title": "Title",
      "author": "Author",
      "year": "Year",
      "source": "Source",
      "license": "License",
      "thumbnail": "Thumbnail",
      "noCopyrights": "No copyright information available for this content.",
      "downloadDescription": "Download this content as a H5P file.",
      "copyrightsDescription": "View copyright information for this content.",
      "embedDescription": "View the embed code for this content.",
      "h5pDescription": "Visit H5P.org to check out more cool content.",
      "contentChanged": "This content has changed since you last used it.",
      "startingOver": "You'll be starting over.",
      "by": "by",
      "showMore": "Show more",
      "showLess": "Show less",
      "subLevel": "Sublevel"
    } 
  },
  "loadedJs": ['blanks.js'], 
  "loadedCss": [],
  "core": { 
    "scripts": [], 
    "styles": []
  }
};
var content = {
	"media":{
		"params":{}
		},
	"text":"<p>Fill in the missing words<\/p>\n",
	"overallFeedback":[
	{
		"from":0,
		"to":25,
		"feedback":"\u03a7\u03ac\u03bb\u03b9\u03b1"
	},
	{
		"from":26,
		"to":50,
		"feedback":"\u039a\u03ac\u03c4\u03b9 \u03ba\u03ac\u03bd\u03b5\u03b9\u03c2"
	},
	{
		"from":51,
		"to":75,
		"feedback":"\u039c\u03c0\u03bf\u03c1\u03b5\u03af\u03c2 \u03ba\u03b1\u03b9 \u03ba\u03b1\u03bb\u03cd\u03c4\u03b5\u03c1\u03b1"
	},
	{"from":76,
	"to":100,
	"feedback":"\u03a0\u03b5\u03c1\u03bd\u03ac\u03c2"
	}
	],
	"showSolutions":"Show solution",
	"tryAgain":"Retry",
	"checkAnswer":"Check",
	"notFilledOut":"Please fill in all blanks to view solution",
	"answerIsCorrect":"':ans' is correct",
	"answerIsWrong":"':ans' is wrong",
	"answeredCorrectly":"Answered correctly",
	"answeredIncorrectly":"Answered incorrectly",
	"solutionLabel":"Correct answer:",
	"inputLabel":"Blank input @num of @total",
	"inputHasTipLabel":"Tip available",
	"tipLabel":"Tip",
	"behaviour":{
		"enableRetry":true,
		"enableSolutionsButton":true,
		"enableCheckButton":true,
		"autoCheck":false,
		"caseSensitive":false,
		"showSolutionsRequiresInput":true,
		"separateLines":false,
		"disableImageZooming":false,
		"confirmCheckDialog":false,
		"confirmRetryDialog":false,
		"acceptSpellingErrors":false
		},
		"scoreBarLabel":"You got :num out of :total points",
		"confirmCheck":{
			"header":"Finish ?",
			"body":"Are you sure you wish to finish ?",
			"cancelLabel":"Cancel",
			"confirmLabel":"Finish"
			},
			"confirmRetry":{
				"header":"Retry ?",
				"body":"Are you sure you wish to retry ?",
				"cancelLabel":"Cancel",
				"confirmLabel":"Confirm"
			},
			"questions":[
			"<p>\u0397 \u03b4\u03b9\u03c0\u03bb\u03c9\u03bc\u03b1\u03c4\u03b9\u03ba\u03ae *\u03b5\u03c1\u03b3\u03b1\u03c3\u03af\u03b1* \u03b5\u03af\u03bd\u03b1\u03b9 \u03ba\u03ac\u03c4\u03b9 \u03b1\u03c0\u03b1\u03c1\u03b1\u03af\u03c4\u03b7\u03c4\u03bf \u03b3\u03b9\u03b1 \u03ba\u03ac\u03b8\u03b5 \u03c6\u03bf\u03b9\u03c4\u03b7\u03c4\u03ae *\u03c0\u03bf\u03bb\u03c5\u03c4\u03b5\u03c7\u03bd\u03b9\u03ba\u03ae\u03c2* \u03c3\u03c7\u03bf\u03bb\u03ae\u03c2. \u03a5\u03c0\u03ac\u03c1\u03c7\u03bf\u03c5\u03bd \u03ba\u03b1\u03b8\u03b7\u03b3\u03b7\u03c4\u03ad\u03c2 \u03c0\u03bf\u03c5 \u03b1\u03c6\u03ae\u03bd\u03bf\u03c5\u03bd \u03c4\u03bf\u03c5\u03c2 \u03c6\u03bf\u03b9\u03c4\u03b7\u03c4\u03ad\u03c2 \u03bd\u03b1 \u03c6\u03c4\u03b9\u03ac\u03be\u03bf\u03c5\u03bd \u03b4\u03b9\u03ba\u03ac \u03c4\u03bf\u03c5\u03c2 *\u03b8\u03ad\u03bc\u03b1\u03c4\u03b1* \u03ba\u03b1\u03b9 \u03c5\u03c0\u03ac\u03c1\u03c7\u03bf\u03c5\u03bd \u03ba\u03b1\u03b9 \u03bf\u03b9 \u03ba\u03b1\u03b8\u03b7\u03b3\u03b7\u03c4\u03ad\u03c2 \u03c0\u03bf\u03c5 \u03b4\u03af\u03bd\u03bf\u03c5\u03bd \u03c4\u03b1 \u03b8\u03ad\u03bc\u03b1\u03c4\u03b1 \u03c3\u03c4\u03bf\u03c5\u03c2 *\u03c6\u03bf\u03b9\u03c4\u03b7\u03c4\u03ad\u03c2*.<\/p>\n"
			]
}"

window.H5PIntegration.contents['0'] = {
  "library": "H5P.Blanks 1.11", 
  "jsonContent": JSON.stringify(content),
  "fullScreen": false, 
  "exportUrl": "undefined",
  "embedCode": "undefined",
  "resizeCode": "",
  "mainId": 0,
  "url": "content\0\content.json",
  "title": "Example?",
  "contentUserData": {
    0: { 
      'state' : false 
    }
  },
  "displayOptions": {
    "frame": true, 
    "export": true, 
    "embed": true, 
    "copyright": true, 
    "icon": true 
  },"core": {
    "scripts": [
	  "libraries/H5P.Blanks-1.11/js/blanks.js",
      "h5p-php-library/js/jquery.js",
      "h5p-php-library/js/h5p.js",
      "h5p-php-library/js/h5p-event-dispatcher.js",
      "h5p-php-library/js/h5p-x-api-event.js",
      "h5p-php-library/js/h5p-x-api.js",
      "h5p-php-library/js/h5p-content-type.js"
    ],
    "styles": [
	  "libraries/H5P.Blanks-1.11/css/blanks.css",
      "h5p-php-library/styles/h5p.css"
	]

};

</script>
<body>
<div class="h5p-content" data-content-id="0"></div>
</body>

</html>
