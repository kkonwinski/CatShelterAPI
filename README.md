# CatShelter API

## Opis
CatShelter API to prosty interfejs REST zapewniający możliwość zarządzania schroniskiem dla kotów. Dzięki niemu możemy dodawać, aktualizować, przeglądać i usuwać informacje o schroniskach, kotach i pracownikach.

## Instalacja i uruchomienie za pomocą Docker
Wymagania:
- Docker
- Docker-compose

W celu uruchomienia aplikacji wykonaj następujące kroki:
1. Sklonuj repozytorium
2. Utwórz plik `.env` na podstawie pliku `.env.example` i wypełnij go danymi.
3. Uruchom Docker i Docker-compose, a następnie wywołaj `docker-compose up -d` w katalogu głównym projektu.

## Konfiguracja bazy danych
Konfiguracja bazy danych jest przechowywana w pliku `.env`. Ustawienia do bazy danych PostgreSQL to:
```
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=CatShelter
DB_USERNAME=root
DB_PASSWORD=1234
```
Uwaga: plik `.env` nie jest dołączany do repozytorium i musi być utworzony lokalnie.

## Adminer
Adminer jest dostępny pod adresem `http://localhost:8083`. Dane do logowania to:

- Rodzaj bazy: PostgreSQL
- Serwer: postgres
- Użytkownik: root
- Hasło: 1234
- Baza danych: CatShelter

## Endpoints
Wszystkie endpoints są dostępne pod URL `http://localhost:8081/api/` z następującymi ścieżkami:

- `shelters` - zarządzanie schroniskami
- `cats` - zarządzanie kotami
- `workers` - zarządzanie pracownikami

Dla każdej ścieżki dostępne są metody: GET (listowanie i szczegółowe dane), POST (tworzenie), PUT/PATCH (aktualizacja) oraz DELETE (usuwanie).
