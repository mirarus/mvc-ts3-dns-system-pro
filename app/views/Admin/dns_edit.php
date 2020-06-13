<?php
/*
	Mirarus MVC Dns System for everyone
	Copyright (C) 2019 by Mirarus

	This program is free software
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
		
	for help look https://mirarus.com/mvc-ts3-dns-system
*/
?>
<?php require VADIR.'/Template/header.php'; ?>
<div class="row">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">DNS Düzenle - #<?php echo $DNS_Control['id']; ?></h4>
				<p class="card-description"> Aşağıdaki Bölgelere Bilgilerinizi Girerek Kolayca DNS Düzenleyebilirsiniz. </p>
				<div id="DNSEditAlert"></div>
				<form class="forms-sample mt-5" action="" onsubmit="return false;">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">DNS Adı - Klan Adı <font color="red">*</font></label>
								<input type="text" class="form-control" id="name" placeholder="DNS Adı Giriniz." value="<?php echo $DNS_Control['name']; ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="domain">Alan Adı - Domain <font color="red">*</font></label>
								<select class="form-control" id="domain" onkeydown="return false">
									<?php echo '<option value="'.$DNS_Control['domain'].'" selected="selected">.'.$DNS_Control['domain'].'</option>'; ?>
								</select>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="ip">TS3 Ip Adresi</label>
								<input type="text" class="form-control" id="ip" placeholder="TS3 Ip Adresinizi Giriniz." value="<?php echo $DNS_Control['ip']; ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="port">TS3 Port</label>
								<input type="number" class="form-control" id="port" placeholder="TS3 Port'unu Giriniz." value="<?php echo $DNS_Control['port']; ?>">
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
					<button onclick="DNSEdit(<?php echo $DNS_Control['id']; ?>);" id="DNSEditBtn" type="submit" style="margin-left: 36%" class="btn btn-gradient-success mr-2">Düzenle</button>
					<button onclick="DNSAlertHide();" type="reset" class="btn btn-gradient-danger">İptal</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require VADIR.'/Template/footer.php'; ?>