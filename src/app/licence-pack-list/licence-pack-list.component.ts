import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { LicencePackService } from '../services/licence-pack.service';
import { Globals } from '.././globals';
declare var $,unescape,swal: any;

@Component({
  selector: 'app-licence-pack-list',
  templateUrl: './licence-pack-list.component.html',
  styleUrls: ['./licence-pack-list.component.css']
})
export class LicencePackListComponent implements OnInit {

	LicensePackList;
	

	 constructor(private router: Router, private route: ActivatedRoute, 
		private LicencePackService: LicencePackService, public globals: Globals) { }

 ngOnInit()
  {	
		this.globals.pageTitle = '- User';
		this.LicensePackList = [];
		this.default();
	}
	
	default(){
		this.LicencePackService.getAll()
		.then((data) => 
		{
				if(data){ 
			this.LicensePackList = data;
				}
			this.globals.isLoading = false;	
		}, 
		(error) => 
		{
			this.globals.isLoading = false;
			this.router.navigate(['/pagenotfound']);	
		});	
	  
	}

  
}


