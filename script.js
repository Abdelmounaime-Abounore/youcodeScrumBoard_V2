console.log("lddz");

var taskTitle = document.getElementById('task_title');
   // var taskPriority = document.getElementById(task_priority);
   // var taskStatut = document.getElementById(task_statut);
   // var taskDate = document.getElementById(task_date);
   // var taskDescription = document.getElementById(task_description);
   console.log(taskTitle)

function editTask(id){
   // document.getElementById("task-id").value = id;
   taskTitle.value = document.getElementById(id +'titel_Id').getAttribute('titles');
   console.log(document.getElementById(id +'titel_Id'));

}

