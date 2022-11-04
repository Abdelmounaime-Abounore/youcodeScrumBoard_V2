   var taskTitle = document.getElementById('task_title');
   // var taskStatut = document.getElementById(task_statut);
   // var taskDate = document.getElementById(task_date);
   // var taskDescription = document.getElementById(task_description)

function editTask(id){
   // document.getElementById("task-id").value = id;
   taskTitle.value = document.getElementById(id +'titel_Id').getAttribute('titles');
  
   

}

