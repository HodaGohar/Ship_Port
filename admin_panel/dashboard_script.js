// fetch arrivals

 fetch('view_arrival.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    const arrivalTableBody = document.getElementById('arrivalTableBody');
    
    arrivalTableBody.innerHTML = '';
    
    data.forEach(row => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><img src="images/${row.shipImg}" height="100" alt="Ship Image"></td>
        <td>${row.captainName}</td>
        <td>${row.arrivalDate}</td>
        <td>${row.departureDate}</td>
        <td>${row.cargoDescription}</td>
        <td>${row.arrivalStatus}</td>
        <td>${row.berthAllocated}</td>
        <td>
          <a href="update_arrival.html?edit=${row.arrivalID}" class="btn"><i class="fas fa-edit"></i> Edit</a>
          <a href="delete_arrival.php?delete=${row.arrivalID}" class="btn"><i class="fas fa-trash"></i> Delete</a>
        </td>
      `;
      arrivalTableBody.appendChild(tr);
    });
  });

  // fetch crew data

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
  });

  // fetch ships data

  fetch('view_ship.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    const shipTableBody = document.getElementById('shipTableBody');
    
    shipTableBody.innerHTML = '';
    
    data.forEach(row => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><img src="images/${row.shipImg}" height="100" alt="Ship Image"></td>
        <td>${row.shipName}</td>
        <td>${row.shipType}</td>
        <td>${row.maxCapacity}</td>
        <td>${row.registrationDate}</td>
        <td>${row.ownerInfo}</td>
        <td>
          <a href="update_ship.php?edit=${row.shipID}" class="btn"><i class="fas fa-edit"></i> Edit</a>
          <a href="delete_ship.php?delete=${row.shipID}" class="btn"><i class="fas fa-trash"></i> Delete</a>
        </td>
      `;
      shipTableBody.appendChild(tr);
    });
  });
