**Leave Chatroom**
---
This is a restful API to list Chatrooms from the server and uses the Chat-Client-Token to verify its a valid request. 
This will remove a user from the chat room. 
* **URL**<br/>
`/chatroom/id`<br/>

* **METHOD:**
    <br />`DELETE`

* **URL Params**
    
    **Required:**
    ```
    CURL    -X DELETE http://hostname/chatroom/id
            -H "CHAT-CLIENT-TOKEN=aa112341-12331211-5123123"
            -H "contentType:Application/json"
            {
                "URL":"/chatroom/ID",
                "Method":"DELETE",
                "Headers":{[],"User-Agent":[]}
            },
            "Params":{
                "chatroomid":"1241",
                "userid":"134123"
             },
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
            "ChatroomID":"4123"
            "ChatroomSubject":"SomeSubject"
      }`
      
* **Error Response:**
    * **Code:**  417
      **Content:** `{"Error":"Missing Chat Client Token"}`
      
    * **Code:**
      **Content:** `{}`

* **Example** 