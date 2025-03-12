    <?php
    /**
     * Plugin Name: List License Members
     * Plugin URI: https://www.edb.gov.lk
     * Description: Display content using a shortcode to insert in a page or post
     * Version: 0.1
     * Text Domain: list-license-members
     * Author: Sarath Wijesinghe
     * Author URI: https://www.edb.gov.lk
     */
    function list_license_members() {
        $mydb = connect_external_db();
        $search=@$_GET['id'];
        $where=null;
        if(!empty($search)){
            $where=" AND e.exporter_id='$search'";
        }
        $rows = $mydb->get_results("SELECT DISTINCT e.*,cp.title,cp.name,cp.designation,cp.mobile,l.description as legalstatus,t.description as ctitle,cp.email as cpemail FROM tb_pcc_exporter e LEFT JOIN tb_pcc_exporter_contact_person cp ON cp.exporter_id=e.exporter_id AND cp.type='contact' LEFT JOIN tb_legalstatus l ON l.id=e.legalstatus_id LEFT JOIN tb_user_title t ON t.id=cp.title WHERE e.status!='0' $where ORDER BY e.enterprise_name");
        $content = null;
        $content.='<h2>List of Pure Ceylon Cinnamon Logo License Members</h2>';
        $content .= '<table class="table table-striped table-responsive" style="color: #000;text-decoration: #000">';
        $content .= '<thead>';
        $content .= '<tr style="background-color: #FFC414">';
        $content .= '<th style="width: 200px">Name</th>';
        $content .= '<th >Address</th>';
        $content .= '<th>Tel.</th>';
        $content .= '<th >Email</th>';
        $content .= '<th>Web</th>';
        $content .= '</tr>';
        $content .= '</thead>';
        $content .= '<tbody>';
        foreach ($rows as $obj) {
            $content .= '<tr>';
            $content .= '<td style="background-color: #FF9233;color:#ffff" ><strong><a  href="morelicenceinfo.php?id=' . $obj->exporter_id . '">';
            $content .= $obj->enterprise_name;
            $content .= '</a>';
            $content .= '</strong>';
            $content .= '</td>';
            $content .= '<td>';
            $content .= $obj->address;
            $content .= ' </td>';
            $content .= '<td>';
            $content .= $obj->telephone;
            $content .= '</td>';
            $content .= '<td>';
            $content .= $obj->email;
            $content .= '</td>';
            $content .= '<td style="background-color: #FF9233">';
            $content .= '<a   href="' . $obj->web . '" target="_blank">';
            $content .= $obj->web;
            $content .= '</a>';
            $content .= '</td>';
            $content .= '</tr>';
        }
        $content .= '<tbody>';
        $content .= '</table>';
        return $content;
    }
    add_shortcode('list-license-members', 'list_license_members');
    
    ?>
