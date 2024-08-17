// fetch port data in port website
        fetch('port-data.php')
        .then(response => response.json())
        .then(data => {
            const infoContainer = document.getElementById('port-info');
            data.forEach(port => {
                const portsHTML = `
                           <h2>Port ID</h2><p>${port.portID}</p>
                            <h2>Port Name</h2><p>${port.portName}</p>
                            <h2>Port Location</h2><p>${port.location}</p>
                            <h2>Port Capacity</h2><p>${port.capacity}</p>
                            <h2>Contact Email</h2><p>${port.contactEmail}</p>
                            <h2>Contact Phone</h2><p>${port.contactPhone}</p>
                            <h2>Port Status</h2><p>${port.status}</p>
                            <h2>Open In</h2><p>${port.createdAt}</p>
                    
                `;
                infoContainer.innerHTML += portsHTML;
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });


// fetch services in ship port website
fetch('services-port.php')
    .then(response => response.json())
    .then(data => {
        const servicesContainer = document.getElementById('services-container');
        data.forEach(service => {
            const serviceHTML = `
                <div class="service-column">
                    <div class="single-service">
                        <div class="content">
                            <span class="icon">
                                <i class="${service.iconClass}"></i>
                            </span>
                            <p>${service.portID}</p>
                            <h3 class="main-title">${service.serviceName}</h3>
                            <p class="description">${service.ServiceDescription}</p>
                            <p class="description">${service.ServicePrice}</p>
                            <p class="description">${service.OperatingHours}</p>
                            <p class="description">${service.ContactInfo}</p>
                            <p class="description">${service.status}</p>
                            <a href="book_service.php" class="learn-more">book now</a>
                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
            `;
            servicesContainer.innerHTML += serviceHTML;
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });


// fetch crew data in ship port

    fetch('crew.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        const crewContainer = document.getElementById('crew-container');
        if (Array.isArray(data)) {
            let crewHTML = '';
            data.forEach(crewMember => {
                crewHTML += `
                    <div class="col-md-4 profile">
                        <div class="img-box">
                            <img src="images/${crewMember.crewImg}" height="100" alt="">
                            <ul>
                                <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                                <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                                <a href="#"><li><i class="fa-brands fa-linkedin"></i></li></a>
                            </ul>
                        </div>
                        <div class="content">
                            <h2>${crewMember.crewName}</h2>
                            <h3>${crewMember.role}</h3>
                            <p>${crewMember.nationality}</p>
                            <p>${crewMember.joinDate}</p>
                            <p>${crewMember.contactInfo}</p>
                        </div>
                    </div>
                `;
            });
            crewContainer.innerHTML = crewHTML;
        } else if (data.error) {
            throw new Error(data.error);
        } else {
            throw new Error('Unexpected JSON format');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('crew-container').innerHTML = 'Error loading crew data';
    });

// contact form in ship port

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('createForm').addEventListener('send_message', async (event) => {
            event.preventDefault();
    
            const form = event.target;
            const formData = new FormData(form);
    
            try {
                const response = await fetch('contact-form.php', {
                    method: 'POST',
                    body: formData,
                });
    
                if (!response.ok) {
                    throw new Error('Network response was not ok.');
                }
    
                const result = await response.text(); // Assuming the PHP script returns text
                console.log('Response:', result); // For debugging purposes
    
                // Optionally, process the result here
                if (result.includes('successfully')) {
                    alert('Your message was sent successfully.');
                } else {
                    alert('Could not send your message.');
                }
    
                // Reset the form
                form.reset();
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });

// booking trips form in ship port

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('createForm').addEventListener('send', async (event) => {
            event.preventDefault();
    
            const form = event.target;
            const formData = new FormData(form);
    
            try {
                const response = await fetch('booking-form.php', {
                    method: 'POST',
                    body: formData,
                });
    
                if (!response.ok) {
                    throw new Error('Network response was not ok.');
                }
    
                const result = await response.text();
                console.log('Response:', result); 
    
                if (result.includes('successfully')) {
                    alert('Your trip was booked successfully.');
                } else {
                    alert('Could not book your trip.');
                }
    
                // Reset the form
                form.reset();
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });


   