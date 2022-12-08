import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { NavbarComponent } from './COMPONENTES/NAVBAR/navbar/navbar.component';

import {AppRoutingModule} from '../assets/RUTAS/app.routes';
import {  HomeComponent} from '../app/COMPONENTES/PAGE/INICIO/home/home.component'
import { InicioComponent } from '../app/COMPONENTES/INICIO/inicio/inicio.component';
import { About2Component } from './COMPONENTES/ABOUT2/about2/about2.component';
@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    HomeComponent,
    InicioComponent,
    About2Component,
    ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
