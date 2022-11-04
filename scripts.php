<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();



    function saveTask()
    {
        //CODE HERE
        //SQL INSERT
        require('database.php');
        $title = $_POST['title'];
        $type = $_POST['task-type'];
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        $requete = "INSERT INTO tasks(title, type_id, priority_id, status_id, task_datetime, description) VALUES('$title','$type','$priority', '$status', '$date', '$description')";
        $query = mysqli_query($con, $requete);

        $_SESSION['message'] = "Task has been added successfully !";
		header('location: index.php');
    }


    function getTasks($status_id)
    {
        //CODE HERE
        //SQL SELECT

        require 'database.php';
        $requete = "SELECT tasks.*,types.name as 'type', priorities.name as 'priority' 
        FROM tasks,types,priorities  
        where status_id = $status_id  and tasks.type_id = types.id and tasks.priority_id = priorities.id";
        $query = mysqli_query($con, $requete);
        while($rows = mysqli_fetch_assoc($query)) { 
           echo " <button 
           data-bs-toggle='modal' data-bs-target='#modal-task'
           onclick=  editTask($rows[id])
           class='d-flex text-start border w-100' style='background-color:#CAEBF2;'>
           <div class='col-md-1'>
               <i class='spinner-border spinner-border-sm'></i> 
           </div>
           <div class='col-md-11'>
               <div class='fw-bold' titles='".$rows['title']."' id='$rows[id]titel_Id' >$rows[title]</div>
               <div class=''>
                   <div class='text-success'> created in $rows[task_datetime]</div>
                   <div class=''>$rows[description]</div>
               </div>
               <div class=''>
                   <span class='btn btn-info rounded-pill p-2'>$rows[priority]</span>
                   <span class='btn btn-gray-500 rounded-pill p-2'>$rows[type]</span>
               </div>
           </div>
       </button> ";


    }
}


    function updateTask()
    {
        //CODE HERE
        //SQL UPDATE
        

        // Putting the values into the input


        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
    }

    function deleteTask()
    {
        //CODE HERE
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }

?>