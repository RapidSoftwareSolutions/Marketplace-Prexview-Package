[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Prexview/functions?utm_source=RapidAPIGitHub_PrexviewFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)


# Prexview Package
PrexView makes it simple to convert your data to different formats.
* Domain: [prexview.com](https://prexview.com)
* Credentials: apiKey

## How to get credentials: 

1. Sign in [prexview.com](https://prexview.com/account/)
2. Click 'Generate new API key'


 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```


## Prexview.createDocument
This is the most basic and simple way to use the transform service.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your prexview access key
| output        | Select     | Type of document that will be created by PrexView service, it must be html, pdf, png or jpg.
| template      | String     | Template’s name to use for the document creation, you can use dynamic values.
| templateBackup| String     | Template’s name to use if the template option doesn’t exist
| note          | String     | Custom note that can be used to add any information, it’s limit up to 500 chars. This is useful if you want to add metadata such as document, transaction or customer ID. You can use dynamic values.

