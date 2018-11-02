import { Injectable } from '@angular/core';
import { environment } from '../environments/environment';

@Injectable()
export class Globals { 

  constructor() { }
 
  baseAPIUrl: string = environment.baseUrl+ '/api/';  
  baseUrl: string = environment.baseUrl;
  headerpath: string = "{'Content-Type': 'application/json','Accept': 'application/json'}";
  IsLoggedIn: boolean = false;
  isLoading: boolean = false;
  msgflag = false;
  message = '';
  type = '';
  currentLink: string = '';
  pageTitle: string = '';
  
}