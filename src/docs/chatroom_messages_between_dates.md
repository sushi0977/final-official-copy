**chatroom messages between dates**
---
This should pull data from the chat room base on date range
included the subject the chat room is available
all the messages between the dates. 

* **URL**<br/>
`/chatroom/id`<br/>

* **METHOD:**
    <br />`GET`

* **URL Params**
    
    **Required:**
    ```
    CURL    -X GET http://hostname/chatroom/list
            -H "CHAT-CLIENT-TOKEN=aa112341-12331211-5123123"
            -H "contentType:Application/json"
            {
                "URL":"/chatroom/id",
                "Method":"GET",
                "Headers":{[],"User-Agent":[]}
            },
            "Params":{
                "begin":"somedate",
                "end":"somedate"
            },
            "Auth":{
                "Username":"someusername",
                "email":"someemailaddres",
                "userId":"15131"   
            }               
       
    ```


* **Data Params**
     * **HEADER**
        * **CHAT-CLIENT-TOKEN** should verify with the database the token is valid.
            <br />`-H CHAT-CLIENT_TOKEN=aa112341-12331211-5123123`
        * **contentType:**  This should how it will show the date weather its a Json file or if its HTML code to the screen
            **Allowed** content type "Application/json" "Application/HTML"


* **Successful Response:**
    This should bring a listed of chatrooms available to join.  This should be a array with roomID, and name, Subject

    * **Code** 202<br/>
      **Content** 
      ```
      {
            "URL":"/chatroom/id",
            "ChatroomID":"4123",
            "ChatroomSubject":"SomeSubject",
            "Messages":[
                { 
                    "Username":"someuser",
                    "datetimestamp":"Somedate",
                    "message":"Some Text"
                },
                { 
                    "Username":"someuser",
                    "datetimestamp":"Somedate",
                    "message":"Some Text"
                }
            ]
      }
      ```
      
* **Error Response:**
    * **Code:**  417
      **Content:** `{"Error":"Missing Chat Client Token"}`
      
    * **Code:**
      **Content:** `{}`

* **Example** 