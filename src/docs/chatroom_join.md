**Join Chatroom**
---
This is a restful API to list Chatrooms from the server and uses the Chat-Client-Token to verify its a valid request. 
Once a chat room  is created we should be able to connected this chat room and it should display the subjected and possible welcome message.
This will also bring any other messages as well in the chatroom.
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
                "URL":"/chatroom/{id}",
                "Method":"GET",
                "Headers":{[],"User-Agent":[]}
            },
            "Params":{},
            "Auth":null,
            "Body":"",
                
       
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
      `{
            "URL":"/chatroom/",
            "ChatroomID":"4123",
            "ChatroomSubject":"SomeSubject",
            "ChatroomMessages":[
                "MessageID":mID,
                "Username":"someuser",
                "DateTimesTamp":"somedate",
                "MassageText":"Some Text"
                ]
      }`
      
* **Error Response:**
    * **Code:**  417
      **Content:** `{"Error":"Missing Chat Client Token"}`
      
    * **Code:**
      **Content:** `{}`

* **Example** 