import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { About2Component} from '../../app/COMPONENTES/ABOUT2/about2/about2.component'
import {Routes, RouterModule } from '@angular/router';
import {HomeComponent} from '../../app/COMPONENTES/PAGE/INICIO/home/home.component'
const routes: Routes = [
    { path: 'Inicio', component: HomeComponent },
    {path: 'accesorios', component: About2Component}

];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash: true,
    relativeLinkResolution: 'legacy'}), ],
  exports: [RouterModule]
  })
export class AppRoutingModule { }