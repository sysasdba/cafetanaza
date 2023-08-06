function showDeleteConfirmation(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
}

function showApproveConfirmation(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, approve it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
}

function showRejectConfirmation(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, reject it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
}

function showThankYou(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Thank You for Your Reservation!',
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK',
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        }
    });
}
