import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-listaforo',
  templateUrl: './listaforo.component.html',
  styleUrls: ['./listaforo.component.css']
})
export class ListaforoComponent implements OnInit {
  @Input() dataEntrante:any;

  constructor() { }

  ngOnInit(): void {
  }

}
