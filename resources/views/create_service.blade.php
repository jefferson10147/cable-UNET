<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Service</title>
</head>
<body>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <select name="internet_service_id">
            <option value="{{ NULL }}"></option>
            @foreach ($internetServices as $internetService)
                <option value="{{ $internetService->id }}">{{ $internetService->name }}</option>
            @endforeach
        </select>

        <select name="phone_service_id">
            <option value="{{ NULL }}"></option>
            @foreach ($phoneServices as $phoneService)
                <option value="{{ $phoneService->id }}">{{ $phoneService->name }}</option>
            @endforeach
        </select>

        <select name="cable_service_id">
            <option value="{{ NULL }}"></option>
            @foreach ($cableServices as $cableService)
                <option value="{{ $cableService->id }}">{{ $cableService->name }}</option>
            @endforeach
        </select>

        <button type="submit" value="send">ok</button>
    </form>
    
</body>
</html>