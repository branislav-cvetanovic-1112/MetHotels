import {Component} from 'angular2/core';
import {Http, HTTP_PROVIDERS} from 'angular2/http';
import 'rxjs/Rx';
@Component({
	selector: 'moja-aplikacija',
	templateUrl: 'templatekorisnici.html'
})
export class AppComponent { 
	korisnici: Object[];
	constructor(http: Http){
		http.get('korisnici.json')
		.map(res => res.json())
		.subscribe(korisnici => this.korisnici = korisnici);
	}
}