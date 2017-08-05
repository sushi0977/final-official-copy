**User Add**
---
 Creates a new users 
* **URL**<br/>
`/user/add`<br/>

* **METHOD:**
    <br />`PUT`
    <br />`POST`

* **URL Params**
    
    **Required:**
    ```
    CURL    -X POST http://hostname/chatroom/id
            -H "CHAT-CLIENT-TOKEN=aa112341-12331211-5123123"
            -H "contentType:Application/json"
            {
                "URL":"/user/add",
                "Method":"POST",
                "Headers":{[],"User-Agent":[]}
            },
            "Params":
            {
                "Username":"Someusername",
                "Email":"EmailAddress"
            }
                          
    ```


* **Data Params**
     * **HEADER**
        * **CHAT-CLIENT-TOKEN** should verify with the database the token is valid.
            <br />`-H CHAT-CLIENT_TOKEN=aa112341-12331211-5123123`
        * **contentType:**  This should how it will show the date weather its a Json file or if its HTML code to the screen
            **Allowed** content type "Application/json"


* **Successful Response:**
    This should bring a listed of chatrooms available to join.  This should be a array with roomID, and name, Subject

    * **Code:** 202<br/>
      **Content:** 
      ```
      {
            "URL":"/user/",
            "Username":"Someuser".
            "Email":"Email@Email.com".
            "UserID":"UserID"
      }
      ```
      
* **Error Response:**
    * **Code:**  417 <br/>
      **Content:** `{"Error":"Missing Chat Client Token"}`
      
    * **Code:** <br/>
      **Content:** `{}`

* **Example** 