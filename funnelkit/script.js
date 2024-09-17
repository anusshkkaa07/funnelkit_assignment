
function loadFile(event) {
    var image = document.getElementById('image-preview');
    image.src = URL.createObjectURL(event.target.files[0]);
}

var modal = document.querySelector('.container');
var viewModal=document.querySelector('.container1');


function openModal() {
    modal.style.display = 'flex';
}

function closeModal() {
    modal.style.display = 'none';
}

// Function to open the modal and load contact data by ID
function openViewModal(contactId) {
    // Fetch data for the specific contactId
    fetch('./get.php?Id=' + contactId)
        .then(response => response.json()) // Convert the response to JSON
        .then(data => {
            
            // Populate the form fields with the fetched data
            $('input[name="Id"]').val(data.Id);
            $('input[name="fname"]').val(data.fname);
            $('input[name="mname"]').val(data.mname);
            $('input[name="lname"]').val(data.lname);
            $('input[name="email"]').val(data.email);
            $('input[name="cchome"]').val(data.cchome);
            $('input[name="contact_home"]').val(data.contact_home);
            $('input[name="ccwork"]').val(data.ccwork);
            $('input[name="contact_work"]').val(data.contact_work);
            $('input[name="addl1"]').val(data.addl1);
            $('input[name="addl2"]').val(data.addl2);
            $('input[name="state"]').val(data.state);
            $('input[name="country"]').val(data.country);
            if (data.contact_image) {
                const imageUrl = 'uploads/' + data.contact_image;
                console.log('Image URL:', imageUrl); // Debugging line
                $('#image-preview').attr('src', imageUrl);
            } else {
                // Handle case where there is no image
                $('#image-preview').attr('src', 'user.png'); // or clear the image
            }
            // Open the modal after populating the form
            viewModal.classList.add('show');
        })
        .catch(error => {
            console.error('Error fetching contact data:', error);
        });
}

// Function to close the modal
function closeViewModal() {
    viewModal.classList.remove('show');
}

// Function to save the updated contact data
function saveData(event) {
    event.preventDefault(); // Prevent form submission reload

    // Collect form data
    const formData = new FormData(document.querySelector('#viewModal'));

    // Send the updated data to the server using fetch
    fetch('./edit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) // Convert response to JSON
    .then(result => {
        if (result.success) {
            alert('Contact updated successfully');
            closeViewModal(); // Close the modal after successful update
        } else {
            alert('Update failed: ' + result.message);
        }
    })
    .catch(error => {
        console.error('Error updating contact data:', error);
    });
}

// Function to delete contact (optional)
// Function to delete the contact
function deleteContact() {
    // Get the contact ID from the form
    const contactId = document.querySelector('input[name="Id"]').value;

    if (!contactId) {
        alert('Contact ID is missing.');
        return;
    }

    // Confirm the deletion
    const confirmDelete = confirm('Are you sure you want to delete this contact?');
    if (!confirmDelete) {
        return;
    }

    // Send a DELETE request to the server to remove the contact
    fetch('./delete.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Send form data
        },
        body: 'Id=' + encodeURIComponent(contactId) // Pass the contact ID for deletion
    })
    .then(response => response.json()) // Parse the JSON response
    .then(result => {
        if (result.success) {
            alert('Contact deleted successfully.');
            closeViewModal(); // Close the modal after deletion
            // Optionally, refresh the contact list or remove the deleted item from the UI
        } else {
            alert('Failed to delete contact: ' + result.message);
        }
    })
    .catch(error => {
        console.error('Error deleting contact:', error);
    });
}




