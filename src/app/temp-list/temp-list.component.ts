import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { LicencePackService } from '../services/licence-pack.service';
import { Globals } from '.././globals';
declare var $,unescape,swal: any;

@Component({
  selector: 'app-licence-pack-list',
  templateUrl: './temp-list.component.html',
  styleUrls: ['./temp-list.component.css']
})
export class TempListComponent implements OnInit {

	TempList;
	

	 constructor(private router: Router, private route: ActivatedRoute, 
		private LicencePackService: LicencePackService, public globals: Globals) { }

 ngOnInit()
  {	
		this.globals.pageTitle = '- User';
		this.TempList = [];
		this.default();
	}
	
	default(){
		this.LicencePackService.getTempData()
		.then((data) => 
		{
				if(data){ 
			this.TempList = data;
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


