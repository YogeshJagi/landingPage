
let input = document.querySelector(".input-container input");
let Addbtn = document.querySelector(".input-container button");
let deletebtn = document.querySelectorAll("#deletebtn");


Addbtn.addEventListener("click",function(){
	
	if(input.value.trim() === "")
		{
			alert("You must write something");
		}
	 else
	 	{
				
			alert("add you new task");

	 	}

});


function deletetask(){

	return confirm('do you delete is task');
}


function updatetask(){

	return confirm('do you update is task');
}













