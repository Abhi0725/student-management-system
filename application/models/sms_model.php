<?php
class Sms_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_records($id = FALSE)
        {
	        if ($id === FALSE)
	        {
	                $query = $this->db->get('student_record');
	                return $query->result_array();
	        }

	        $query = $this->db->get_where('student_record', array('id' => $id));
	        return $query->row_array();
        }

		public function add_student()
		{

			$interests_arr = $this->input->post('interests');
			if (empty($interests_arr)) {
				$interests = 'none';
			}
			else
			$interests = implode(',', $interests_arr );
		    $data = array(
		        'name' => $this->input->post('name'),
		        'address' => $this->input->post('address'),
		        'gender' => $this->input->post('gender'),
		        'year_of_pass' => $this->input->post('eyop'),
		        'interests' => $interests,

		    );

		    return $this->db->insert('student_record', $data);
		}

		public function edit_student($id)
		{

			$interests_arr = $this->input->post('interests');
			if (empty($interests_arr)) {
				$interests = 'none';
			}
			else
			$interests = implode(',', $interests_arr );
		    $data = array(
		        'name' => $this->input->post('name'),
		        'address' => $this->input->post('address'),
		        'gender' => $this->input->post('gender'),
		        'year_of_pass' => $this->input->post('eyop'),
		        'interests' => $interests,

		    );
			$this->db->where('id', $id);
			$this->db->update('student_record', $data); 
		}

        public function delete($id)
        {
        	$this->db->delete('student_record', array('id' => $id));
        }

}