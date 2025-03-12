<html>
    <head>
        <title></title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="customers">
    <table id="tab_customers" class="table table-striped">
        <colgroup>
            <col width="20%">
                <col width="20%">
                    <col width="20%">
                        <col width="20%">
        </colgroup>
        <thead>
            <tr class='warning'>
                <th>Country</th>
                <th>Population</th>
                <th>Date</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Chinna</td>
                <td>1,363,480,000</td>
                <td>March 24, 2014</td>
                <td>19.1</td>
            </tr>
            <tr>
                <td>India</td>
                <td>1,241,900,000</td>
                <td>March 24, 2014</td>
                <td>17.4</td>
            </tr>
            <tr>
                <td>United States</td>
                <td>317,746,000</td>
                <td>March 24, 2014</td>
                <td>4.44</td>
            </tr>
            <tr>
                <td>Indonesia</td>
                <td>249,866,000</td>
                <td>July 1, 2013</td>
                <td>3.49</td>
            </tr>
            <tr>
                <td>Brazil</td>
                <td>201,032,714</td>
                <td>July 1, 2013</td>
                <td>2.81</td>
            </tr>
        </tbody>
    </table>
</div>
<button onclick="javascript:exportPDF();">PDF</button>
<script src="jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jspdf.debug.js" type="text/javascript"></script>
<script>
    function exportPDF() {
    var pdf = new jsPDF('p', 'pt', 'letter');
    
    source = $('#customers')[0];

    specialElementHandlers = {
      
        '#bypassme': function (element, renderer) {
           
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {        
        pdf.save('Test.pdf');
    }, margins);
}
</script>
    </body>
</html>
