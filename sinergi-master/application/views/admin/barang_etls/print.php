<script type="text/javascript">
window.print();
window.onfocus=function(){window.location = "<?php echo base_url()?>index.php/admin/faktur";}</script>
<style type="text/css" media="print">
@media print{
        @page 
        {
            size: auto;   /* auto is the current printer page size */
			margin-top:8mm;
			margin-bottom:0mm;
			
              /* this affects the margin in the printer settings */
        }

        body 
        {
			-webkit-print-color-adjust: exact;
            background-color:#FFF; 
            border: solid 1px #FFF ;
            margin: 0px;  /* the margin on the content before printing */
			font-size:10;
			
			font-family:Calibri;
       }
	      
			   th{
				   size:15px;
			   border: 0.5px solid;
			   text-align:right
			   }
	   .tableh{
		   text-align:right}
}
    </style>



 <div class="box">
            <div class="box-header bg-red">
              
              <div class="box-tools">
                
              </div>
            </div>
            <!-- /.box-header -->
   <div class="box-body table-responsive no-padding">

             <table width="100%">
              

               <tr>
                 <td colspan="5" align="center"><span class="box-title"><?php echo $pro['nama'];?><br /><?php echo $pro['alamat'];?><br /><?php echo $pro['telpon'];?>
                 <br />
                 -------------------------<br />
                 <?php echo 'Nota : '.$id.'<br/>'.date('d-m-Y H:i:s');?><br />
                 -------------------------</span></td>
               </tr>
               <tr>
                 <th colspan="5" align="right"></th>
                 
               </tr>
               <tr>
                 <td width="26">No</td>
                 <td>Nama</td>
                 <td>Qty</td>
                 <td>Harga</td>
                 <td>Jumlah</td>
               </tr>
               <tr>
                 <th colspan="5" align="right"></th>
                 
               </tr>
               
               <?php 
				$sum=0;
				$no=1;
				if($data->num_rows()>0){
					foreach($data->result() as $row){
					?>
               
               <tr>
                 <td width="26"><?php echo $no++?></td>
                 <td colspan=""><?php $nama=$this->model_view->baranggdg($row->id_barang);
				  if($nama==""){
					  echo $this->model_view->barattp($row->id_barang);
					  }else{
						  echo $nama;
						  }
				  
				  ?></td>
                  <td><?php echo $row->qty.' '.$row->satuan;?></td>
                 
                   <td><?php echo $row->harga_jual;?></td>
                 <td class="tableh"><?php $r=$row->harga_jual*$row->qty;
				  echo number_format($r);$sum+=$r;?></td>
               </tr>
               
               <?php }}?>
               <tr>
                 <th colspan="5" align="right"></th>
                 
               </tr>
               <tr>
                 <td colspan="4" align="right">Total </td>
                 <td width="58" class="tableh"><?php echo str_replace(',','.',number_format($sum));?></td>
               </tr>
               <?php if($bayar==""){}else{?>
               <tr>
                 <td colspan="4" align="right">&nbsp;</td>
                 <td width="58" class="tableh"><?php // echo str_replace(',','.',number_format($bayar));?></td>
               </tr>
               <tr>
                 <td colspan="4" align="right"> </td>
                 <td width="58" class="tableh"><?php //echo str_replace(',','.',number_format($bayar-$sum));?></td>
               </tr>
               <?php } ?>
               <tr>
                 <td  align="left">Opr : </td>
                 <td colspan="4" align="left" width="58"><?php echo $this->session->userdata('user_name');?></td>
               </tr>
               <tr>
                 <td  align="left">Ket : </td>
                 <td colspan="4" align="left"><?php $gg=$this->db->query("SELECT
    barang_jual.ket
    , barang_jual.nofak
    , tab_pelanggan.nama
    , tab_pelanggan.jabatan
FROM
    ibenk_kassir.barang_jual
    INNER JOIN ibenk_kassir.tab_faktur 
        ON (barang_jual.nofak = tab_faktur.no_faktur)
    INNER JOIN ibenk_kassir.tab_pelanggan 
        ON (tab_faktur.pelanggan = tab_pelanggan.nik)
        WHERE barang_jual.no_jual='$id' GROUP BY barang_jual.no_jual;");
		if($gg->num_rows()>0){
				 foreach($gg->result() as $to){
					 echo $to->ket.' ('.$to->nofak.')';
					 echo " ".$to->nama." || ".$to->jabatan;
					 }}else{
						 echo "CASH";
						 } ?></td>
               </tr>
               <tr>
                  <td colspan="5" align="center">
                 TERIMAKASIH
                 
                 </td>                
               </tr>
               
               
             </table>
             
</div>
            <!-- /.box-body -->
          </div>
          
          