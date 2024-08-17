

fetch('view_crew.php')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json();
})
.then(data => {
  const crewTableBody = document.getElementById('crewTableBody');
  
  crewTableBody.innerHTML = '';
  
  data.forEach(row => {
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td><img src="images/${row.crewImg}" height="100" alt="crew Image"></td>
      <td>${row.crewName}</td>
      <td>${row.role}</td>
      <td>${row.nationality}</td>
      <td>${row.joinDate}</td>
      <td>${row.contactInfo}</td>
      <td>${row.shipID}</td>
      <td>
        <a href="update_crew.php?edit=${row.crewID}" class="btn"><i class="fas fa-edit"></i> Edit</a>
        <a href="delete_crew.php?delete=${row.crewID}" class="btn"><i class="fas fa-trash"></i> Delete</a>
      </td>
    `;
    crewTableBody.appendChild(tr);
  });
        form.addEventListener('submit', (event) => {
            event.preventDefault();
    
            const formData = new FormData(form);
    
            fetch('update_crew.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(result => {
                // Assuming update_crew.php redirects to view_crew.html or another page
                console.log('Success:', result);
                alert('Crew member updated successfully.');
                
                // Optionally, you could reload the data without redirection
                fetchCrewData();  // Reload the table data
    
                // Redirect to the page where you want to view the updated crew list
                window.location.href = 'crew_admin.html'; 
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to update crew member.');
            });
        });
    
        // Fetch the data when the page loads
        fetchCrewData();
    });