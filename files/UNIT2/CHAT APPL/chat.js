obj=
{
	monitorchat: function()
	{
		var ev=new EventSource("monitorchat.php");  //if err, give full file path
		ev.addEventListener("chatmsg",obj.updateChat);
		ev.onerror=obj.reconnect;
	},

	//when friend types, gets updated
	updateChat: function(event)
	{
		newdiv=document.createElement("div");
		newdiv.innerHTML="<strong>My Friend:</strong>" + event.data;
		document.getElementById("innertop").appendChild(newdiv);
	},

	//to get indication when eventsource reconnects
	reconnect: function()
	{
		jstat= $("#recon");
		jstat.css({'display':'block'});
		jstat.fadeOut(2000);
	},

	//to update when we type in chat
	checkSend: function(event)
	{
		msg=document.getElementById("msg");
		if(event.keyCode==13)    //13= code of Enter
		{
			//check if 'enter to send' checkbox is checked
			chkbox=document.getElementById("ent");
			if(chkbox.checked)
			{
				//send to server
				obj.sendToServer();
			}
		}
	},
	sendToServer: function()
	{
		//if nothing is typed and they hit enter
		if(msg.value=="")
		{
			return;
		}

		else
		{
			//use Jquery to send to server;
			msgobj={msg:msg.value};	
			$.post("savetodb.php",msgobj,obj.updateWin);
			//$.ajax() is gen pref, as it traps errors
		}
	},
	updateWin: function(stat)
	{
		if(stat != "")
		{
			newdiv=document.createElement("div");
			newdiv.innerHTML="<strong>Me:</strong>" + stat;
			document.getElementById("innertop").appendChild(newdiv);

			//have to clear textbox after out textgets sent
			msg.value="";
		}
	}
}















