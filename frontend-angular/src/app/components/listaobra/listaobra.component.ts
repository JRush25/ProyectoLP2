import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-listaobra',
  templateUrl: './listaobra.component.html',
  styleUrls: ['./listaobra.component.css']
})
export class ListaobraComponent implements OnInit {
  @Input() dataEntrante:any;
  constructor() { }

  ngOnInit(): void {
  }

}
