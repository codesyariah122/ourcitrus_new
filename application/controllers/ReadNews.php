<?php
class ReadNews extends CI_Controller {
  public function ProfessionalBusinessConsultant()
  {
    $data['title'] = "ProfessionalBusinessConsultant";
    $data['smooth_page'] = 'ProfessionalBusinessConsultant';
    $data['header_title'] = 'Professional Business Consultant';
    $data['ProfessionalBusinessConsultant_page'] = 'ProfessionalBusinessConsultant';

    
    $this->load->view('front-end/work/news/read/professional-business-consultant.html');
    $this->load->view('front-end/work/footer.php');
  }
}
 ?>
