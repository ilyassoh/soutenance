let tasks = [];
function addTask() {
    alert('hiiiiiii')
    const taskInput = document.getElementById("taskInput");
    const taskList = document.getElementById("taskList");
    const taskText = taskInput.value.trim();
    if (taskText !== "") {
        tasks.push(taskText);
        const taskId = tasks.length - 1;
        const li = document.createElement("li");
        li.className = "col-md-4 list-group-item";
        li.innerHTML = `
        <span>${taskText}</span>
        <span class="btn btn-danger btn-sm ms-2" onclick="deleteTask(${taskId})">Delete</span>
        `;
        taskList.appendChild(li);
        taskInput.value = "";
    }
    document.getElementById('listreferences').value = tasks.join(" | ");
}
function deleteTask(taskId) {
    tasks.splice(taskId, 1);
    document.getElementById('listreferences').value = tasks.join(" | ");
    const taskList = document.getElementById("taskList");
    taskList.removeChild(taskList.childNodes[taskId]);
}