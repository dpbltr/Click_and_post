<?php
defined('BASEPATH') or exit('No direct script access allowed');

class demoModel extends CI_Model
{

    public function Add()
    {

        $data = [
            "name" => isset($_POST['name']) ? $_POST['name'] : '',
            "email" => isset($_POST['email']) ? $_POST['email'] : '',
            "mobile_no" => isset($_POST['mobile_no']) ? $_POST['mobile_no'] : '',
            "message" => isset($_POST['message']) ? $_POST['message'] : '',
        ];
        $result = $this->db->insert('login_user', $data);
        $insert_id = $this->db->insert_id();
        if ($result) {
            $sendToEmail = $data['email'];
            echo $sendToEmail . "hello";
            $subject = "Any other persone";
            $message = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi natus laudantium quia! Ipsum, quam quisquam adipisci et consequuntur placeat temporibus rerum porro voluptate dolore autem, enim, maxime nemo voluptatum dignissimos.";

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '587',
                'smtp_user' => 'deepakpearsystem@gmail.com',
                'smtp_pass' => 'pvwhjnbaacqqgaaf',
                'smtp_crypto' => 'tls',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => true,
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('rashidpearsystem@gmail.com');
            $this->email->to($sendToEmail);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                echo 'successfully Sent Email';
            } else {
                echo 'Email Sending Error!' . $this->email->print_debugger();
            }
            return ['status' => 'success', 'statusCode' => 200, 'return' => $insert_id];
        } else {
            return ['status' => 'Badrequest', 'statusCode' => 200, 'return' => ['id' => ""]];
        }
    }

    public function event_data()
    {
        $data = [
            "name" => isset($_POST['name']) ? $_POST['name'] : '',
            "email" => isset($_POST['email']) ? $_POST['email'] : '',
            "mobile_code" => isset($_POST['mobile_code']) ? $_POST['mobile_code'] : '',
            "age" => isset($_POST['age']) ? $_POST['age'] : '',
            "city" => isset($_POST['city']) ? $_POST['city'] : '',
            "gender" => isset($_POST['gender']) ? $_POST['gender'] : '',
        ];
        $result = $this->db->insert('event', $data);
        $insert_id = $this->db->insert_id();
        if ($result) {
            $sendToEmail = $data['email'];
            echo $sendToEmail . "hello";
            $subject = "Any other persone";
            $message = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi natus laudantium quia! Ipsum, quam quisquam adipisci et consequuntur placeat temporibus rerum porro voluptate dolore autem, enim, maxime nemo voluptatum dignissimos.";

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '587',
                'smtp_user' => 'deepakpearsystem@gmail.com',
                'smtp_pass' => 'pvwhjnbaacqqgaaf',
                'smtp_crypto' => 'tls',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => true,
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('rashidpearsystem@gmail.com');
            $this->email->to($sendToEmail);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                echo 'successfully Sent Email';
            } else {
                echo 'Email Sending Error!' . $this->email->print_debugger();
            }
            return ['status' => 'success', 'statusCode' => 200, 'return' => $insert_id];
        } else {
            return ['status' => 'Badrequest', 'statusCode' => 200, 'return' => ['id' => ""]];
        }
    }




    public function registrationform()
    {

        $data = [
            "name" => isset($_POST['name']) ? $_POST['name'] : '',
            "date" => isset($_POST['date']) ? $_POST['date'] : '',
            "age" => isset($_POST['age']) ? $_POST['age'] : '',
            "parents_fullname" => isset($_POST['parents_fullname']) ? $_POST['parents_fullname'] : '',
            "mobile_code" => isset($_POST['mobile_code']) ? $_POST['mobile_code'] : '',
            "mobile_code1" => isset($_POST['mobile_code1']) ? $_POST['mobile_code1'] : '',
            "email" => isset($_POST['email']) ? $_POST['email'] : '',
        ];
        $result = $this->db->insert('registration_user', $data);
        $insert_id = $this->db->insert_id();
        if ($result) {

            $sendToEmail = $data['email'];
            $subject = "Any other persone";
            $message = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi natus laudantium quia! Ipsum, quam quisquam adipisci et consequuntur placeat temporibus rerum porro voluptate dolore autem, enim, maxime nemo voluptatum dignissimos.";

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => '587',
                'smtp_user' => 'deepakpearsystem@gmail.com',
                'smtp_pass' => 'pvwhjnbaacqqgaaf',
                'smtp_crypto' => 'tls',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => true,
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('rashidpearsystem@gmail.com');
            $this->email->to($sendToEmail);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                echo 'successfully Sent Email';
            } else {
                echo 'Email Sending Error!' . $this->email->print_debugger();
            }
            return ['status' => 'Success', 'statusCode' => 400, 'return' => $insert_id];
        } else {
            return ['status' => 'Badrequest', 'statusCode' => 200, 'return' => ['id' => ""]];
        }
    }


    public function ageandgender()
    {

        $this->db->select('age_gender.age,age_gender.gender');
        $this->db->from('age_gender');
        $this->db->order_by('age_gender.id', 'ASC');
        $result =  $this->db->get()->result_array();
        if ($result) {
            return ['status' => 'Success', 'statusCode' => 200, 'data' => $result];
        } else {
            return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => []];
        }
    }

    public function state()
    {
        $this->db->select('tbl_state.name');
        $this->db->from('tbl_state');
        $result = $this->db->get()->result_array();
        if ($result > 0) {
            return ['status' => 'Success', 'statusCode' => 200, 'return' => $result];
        } else {
            return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => ''];
        }
    }
}
