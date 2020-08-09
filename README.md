PocketDoc Assesment 
The Glasgow Score Calculator Documentation 

Some Theory

The Glasgow score was initially made for the evaluation of head trauma, however it allows a good description of the patient's state at a given moment and especially to follow the evolution of his state of consciousness. The Glasgow score is rated from 3 to 15 and must be broken down into its three parameters noted Y + V + M = 3 to 15

This simple mobile application helps Doctors to calculate Glasgow score and predict the percentage of Recovery and Mortality with the ease of clicking a button .

I used the following data from https://www.sfmu.org/calculateurs/glasgow.htm to do simple Analysis report for each calculation 

Analysis :
    • Score of 3 or 4: about 7% good recovery. - About 87% mortality.
    • Score of 5 to 7: approximately 34% good recovery. - About 53% mortality.
    • Score of 8 to 10: approximately 68% good recovery. - About 27% mortality.
    • Score greater than 10: approximately 82% good recovery. - About 12% mortality.

API
Glasgow Score Calculator API is built using PHP and use Laravel MVC framework and uses  postgresQl database to store the structure of the Glasgow Score parameters and options.using this API we can create, update, Fetch and delete options under three parameters in the Glasgow Score Calculation

How to depoly

- clone or download zip Glasgow Score Calculator API codebase from github

- change .env configration according to  your database username and password

- create postgresql or mysql database with the same name you put in .env configration

- migrate the tables to the connected database using the following command

	php artisan migrate
- finally  run the server
	php artisan serve

you can access the Api using postman or browser through the local link 
http://127.0.0.1:8000/api/


endpoints on the local server 

For eye opening parameter
http://127.0.0.1:8000/api/eye_openings---  fetch all  options for eye opening
http://127.0.0.1:8000/api/eye_opening/5---- -- get one option using its id (5 in this case)

Json fetched from ey_opening of the api

const eyeOpeningData = [
{
label: "Spontaneous",
selected: false,
value: 4,
},
{ label: "On Verbal Command", selected: true, value: 3 },
{
label: "To pain",
selected: false,
value: 2,
},
{ label: "Nothing", selected: false, value: 1 },
];




For eye Verbal Response
http://127.0.0.1:8000/api/verbal_responses --- fetch all  options under verbal response
http://127.0.0.1:8000/api/verbal_response/5 --- get one option using its id (5 in this case)


JSON returned from verbal response of the api

const verbalResponseData = [
{
label: "Appropraited,oriented",
selected: false,
value: 5,
},
{ label: "Confused", selected: false, value: 4 },
{
label: "Inconsistent",
selected: true,
value: 3,
},
{
label: "incomprehensible",
selected: false,
value: 2,
},

{
label: "Nothing",
selected: false,
value: 1,
},
];


For eye Verbal Response
http://127.0.0.1:8000/api/motor_responses --- fetch all  options under Motor response
http://127.0.0.1:8000/api/motor_response/5 --- get one option using its id (5 in this case)


const motorResponseData = [
{
label: "Obdience to veerbal orders",
selected: false,
value: 6,
},

{
label: "Pain-oriented reaction",
selected: false,
value: 5,
},

{
label: "Non-oriented pain response",
selected: false,
value: 4,
},
{
label: "With decortication type",
selected: true,
value: 3,
},
{
label: "type of decerebration",
selected: false,
value: 2,
},
{
label: "Nothig",
selected: false,
value: 1,
},
];


Mobile Application 
Glasgow Score Calculator mobile application is built using React Native ,it uses Axios  to fetch the data from the API

the app requests to the API to fetch the stucture of the Glasgow Score to construct the interface and use it for the calculation 



 

 
