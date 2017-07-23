## Room Join
Connects to Chat room and list latest messages


### Headers
- **AuthSessionId** - Identifier for current session
- **AuthSessionSecret** - Secret for current session

### Parameters
- **RoomName** - Name of the room to join

### Body
- **RoomName** - Name of the Room to join
- **UserID** - UserID
- **numberOfmessages** - Expected number of messages to display (limited by the configuation of max messages to display)

### Response
- **Message Array** - List of messages of the last number of message depending on configuration

### Errors
- **ErrorCode1** - No Room exsits Please create new room
- **ErrorCode2** - Username was not given
- **ErrorCode3** - Room is inactived and been archived. 

### Example Request
`GET /rooms/join`

```javascript
{
	"RoomName": "Room",
	"userID": 12341,
  "numberOfMessages": 100
}
```

### Example Response
`200 OK`

```javascript
{
	"messages": [{
			"userID": 12314,
			"username": "somename",
			"timestamp": "MM/DD/YYYY HH:mm:ss",
			"Message": "Some Message"
		},
		{
			"UserID": 12341,
			"username": "User2",
			"timestamp": "MM/DD/YYYY HH:mm:ss",
			"Message": "this is a test "
		}
	]
}
```
