<?php

// get the feedback (they are arrays, to make multiple positive/negative messages possible)
$feedback_positive = Session::get( 'feedback_positive' );
$feedback_negative = Session::get( 'feedback_negative' );

// echo out positive messages
if ( isset( $feedback_positive ) ) {
	foreach ( $feedback_positive as $feedback ) {
		?>


		<script>
		Swal.fire({
		        text: "<?= $feedback; ?>",
		        icon: "success",
		        buttonsStyling: false,
                timer: 3000,
                showConfirmButton:false,
		        // confirmButtonText: "Ok, got it!",
		        // customClass: {
		        //     confirmButton: "btn btn-primary"
		        // }
		    });
		</script>

		<?php
	}
}

if ( isset( $feedback_negative ) ) {
	foreach ( $feedback_negative as $feedback ) {
		?>


		<script>
		Swal.fire({
						text: "<?= $feedback; ?>",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
								confirmButton: "btn btn-primary"
						}
				});
		</script>

		<?php
	}
}
