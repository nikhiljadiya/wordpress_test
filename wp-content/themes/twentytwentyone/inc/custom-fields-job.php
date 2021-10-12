<?php

/*
 * Job_Meta_Box
 */

class Job_Meta_Box {

	public function __construct() {

		if ( is_admin() ) {
			add_action( 'load-post.php', array( $this, 'init_metabox' ) );
			add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
		}

	}

	public function init_metabox() {

		add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
		add_action( 'save_post', array( $this, 'save_metabox' ), 10, 2 );

	}

	public function add_metabox() {

		add_meta_box( 'jobs_metabox', __( 'Job Salary Details', 'twentytwentyone' ), array(
			$this, 'render_metabox'
		), 'jobs', 'advanced', 'default' );

	}

	public function render_metabox( $post ) {

		// Add nonce for security and authentication.
		wp_nonce_field( 'job_nonce_action', 'job_nonce' );

		// Retrieve an existing value from the database.
		$job_salary = get_post_meta( $post->ID, 'job_salary', true );

		// Set default values.
		if ( empty( $job_salary ) ) {
            $job_salary = '';
		}

		// Form fields.
		?>
        <table class="form-table">

            <tr>
                <th>
                    <label for="job_salary" class="job_salary"><?php echo __( 'Job Salary', 'twentytwentyone' ); ?></label>
                </th>
                <td>
                    <input type="text" name="job_salary" id="job_salary" value="<?php echo $job_salary; ?>">
                </td>
            </tr>

        </table>
		<?php

	}

	public function save_metabox( $post_id, $post ) {

		// Add nonce for security and authentication.
		$nonce_name = $_POST['job_nonce'];
		$nonce_action = 'job_nonce_action';

		// Check if a nonce is set.
		if ( ! isset( $nonce_name ) ) {
			return;
		}

		// Check if a nonce is valid.
		if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
			return;
		}

		// Check if the user has permissions to save data.
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		// Check if it's not an autosave.
		if ( wp_is_post_autosave( $post_id ) ) {
			return;
		}

		// Check if it's not a revision.
		if ( wp_is_post_revision( $post_id ) ) {
			return;
		}

		// Sanitize input.
		$job_salary = isset( $_POST['job_salary'] ) ? sanitize_text_field( $_POST['job_salary'] ) : '';

		// Update the meta field in the database.
		update_post_meta( $post_id, 'job_salary', $job_salary );
	}

}

new Job_Meta_Box;
