use CHAT;
create table chatroom (roomID int AUTO_INCREMENT PRIMARY KEY, roomName varchar(50), roomSubject varchar(256),creation TIMESTAMP, arcived boolean DEFAULT 0);
create table user (userID int AUTO_INCREMENT PRIMARY KEY , uuid varchar(64), username varchar(50), email varchar(256));
create table chatMessages (messageID int AUTO_INCREMENT PRIMARY KEY, roomID int , userID int , messageDate timestamp, message LONGTEXT, CONSTRAINT FK_chatRoom FOREIGN KEY chatMessages(roomID) REFERENCES chatroom(roomID), CONSTRAINT FK_user FOREIGN KEY chatMessages(userID) REFERENCES user(userID));
create table chatRoomOwner (roomID int , userID int,
  CONSTRAINT FK_chatroom1 FOREIGN KEY chatRoomOwner(roomID) REFERENCES chatroom(roomID),
  CONSTRAINT FK_user1 FOREIGn KEY chatRoomOwner(userID) REFERENCES user(userID)
);

create table chatRoomUserList (userID int
,roomID INT,status boolean default 1, banned boolean default 0
  ,CONSTRAINT FK_user2 FOREIGN KEY chatRoomUserList(userid) REFERENCES user(userid)
  ,CONSTRAINT  FK_room2 FOREIGN KEY  chatRoomUserList(roomID) REFERENCES chatroom(roomID)
);

######
# Trigger was to create a record in the table Chat Room Owner.
# but due to the user not list in the chatroom as have a way to set other users as owners as well
######
# create TRIGGER createRoom
#   after insert on chatroom
#   for EACH ROW
#   BEGIN
#     set @roomid = new.roomID;
#     set @userid = new.userID;
#     insert into chatRoomOwner VALUE (@roomid,@userid);
#     insert into chatRoomUserList Value (@userid,@roomid,TRUE, FALSE );
#   END;


