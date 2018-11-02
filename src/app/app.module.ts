import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { HttpClientModule } from '@angular/common/http';
import { Globals } from './globals';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LicencePackService } from './services/licence-pack.service';

import { LicencePackComponent } from './licence-pack/licence-pack.component';
import { LicencePackListComponent } from './licence-pack-list/licence-pack-list.component';
import { TempListComponent } from './temp-list/temp-list.component';

@NgModule({
  declarations: [
    AppComponent,
    LicencePackComponent,
    LicencePackListComponent,
    TempListComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpModule,
    FormsModule,
    HttpClientModule,
    RouterModule.forRoot([        
      { path : 'user/add', component : LicencePackComponent},
      { path : 'user/list', component : LicencePackListComponent},
      { path : 'temp/list', component : TempListComponent},
      { path : 'license-pack/edit/:name/:id', component : LicencePackComponent}
      ])
    ],
  providers: [
    Globals,
    LicencePackService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
