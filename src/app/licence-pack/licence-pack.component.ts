import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { LicencePackService } from '../services/licence-pack.service';
import { Globals } from '../globals';
declare var $,swal: any;

@Component({
  selector: 'app-licence-pack',
  templateUrl: './licence-pack.component.html',
  styleUrls: ['./licence-pack.component.css']
})
export class LicencePackComponent implements OnInit {
	
	LicensePackEntity;
	header;
	btn_disable;
	submitted;
	
	constructor(private router: Router, private route: ActivatedRoute,
		private LicencePackService: LicencePackService, public globals: Globals) { }

	ngOnInit() {
		this.globals.pageTitle = '- User';
		this.LicensePackEntity = {};
		//this.LicensePackEntity.tempid = 0;
		this.globals.isLoading = true;	
		this.default();
		let name = this.route.snapshot.paramMap.get('name');
		if(name!="userdata"){
		setInterval(() => {
			debugger
			if(name=="tempdata"){
				let id = this.route.snapshot.paramMap.get('id');
				this.LicensePackEntity.tempid = id
			}
			this.LicencePackService.addTempData(this.LicensePackEntity)
				.then((data) => { debugger
					//console.log(data);
					if(data!=''){
						this.LicensePackEntity.tempid = data;
					}
					//console.log(this.LicensePackEntity.tempid);
					// this.btn_disable = false;
					// this.submitted = false;
					// this.LicensePackEntity = {};
					// LicensePackForm.form.markAsPristine();
					//this.router.navigate(['/temp/list']);
				},
				(error) => {
					// this.btn_disable = false;
					// this.submitted = false;
					// this.globals.isLoading = false;
					this.router.navigate(['/pagenotfound']);
				});
		  }, 6000);
		}
	}
	default(){ 
		let name = this.route.snapshot.paramMap.get('name');
		if(name == 'userdata'){
			let id = this.route.snapshot.paramMap.get('id');
		
		if (id) {
			this.header = 'Edit';
			this.LicencePackService.getById(id)
				.then((data) => {
					this.LicensePackEntity = data;
					this.globals.isLoading = false;
					setTimeout(function(){
				  },100); 	
				},
				(error) => {
					this.globals.isLoading = false;
					this.router.navigate(['/pagenotfound']);
				});
		}
		}
		else if(name == 'tempdata')
		{
			let id = this.route.snapshot.paramMap.get('id');
		
		if (id) {
			this.header = 'Edit';
			this.LicencePackService.getTempById(id)
				.then((data) => {
					this.LicensePackEntity = data;
					this.globals.isLoading = false;
					setTimeout(function(){
				  },100); 	
				},
				(error) => {
					this.globals.isLoading = false;
					this.router.navigate(['/pagenotfound']);
				});
		}	
		}
		else {
			this.header = 'Add';
			this.LicensePackEntity = {};
			this.LicensePackEntity.LicensePackId = 0;
			this.LicensePackEntity.IsActive = '1';
			this.LicensePackEntity.LicensePackType='';
			this.LicensePackEntity.DiscountId='0';
		}
	}

	addLicensePack(LicensePackForm) {	debugger
		let id = this.route.snapshot.paramMap.get('id');
		if (id) {
			this.submitted = false;
		} else {
			this.LicensePackEntity.UserId = 0;
			this.submitted = true;
		}
		if (LicensePackForm.valid) {
			this.btn_disable = true;
			this.LicencePackService.add(this.LicensePackEntity)
				.then((data) => {
					this.btn_disable = false;
					this.submitted = false;
					this.LicensePackEntity = {};
					LicensePackForm.form.markAsPristine();
					this.router.navigate(['/user/list']);
				},
				(error) => {
					this.btn_disable = false;
					this.submitted = false;
					this.globals.isLoading = false;
					this.router.navigate(['/pagenotfound']);
				});
		}
	}
	clearForm(LicensePackForm) {
		this.LicensePackEntity = {};
		this.LicensePackEntity.LicensePackId = 0;
		this.LicensePackEntity.IsActive = '1';
		this.LicensePackEntity.DiscountType='';
		this.LicensePackEntity.DiscountId='0';
		this.submitted = false;
		LicensePackForm.form.markAsPristine();
	}

}


