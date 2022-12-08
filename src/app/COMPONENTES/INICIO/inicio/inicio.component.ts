import { Component, OnInit } from '@angular/core';
import { ProductoService } from '../../../../service/productos.service';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent implements OnInit {

  products=null;
  constructor(private apiScv:ProductoService) { 
  }

  ngOnInit(): void {
    this.getup();
  }

  getup(){
    this.apiScv.mostrarTodos().subscribe((result:any)=>
    this.products= result)
    console.log(this.products);
}

  }
