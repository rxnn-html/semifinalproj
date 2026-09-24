<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager - Monochrome Aesthetic</title>
    <style>
        * { box-sizing: border-box; }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #0f1012; /* Deep, sleek monochrome black/gray */
            margin: 0;
            padding: 0;
            color: #d1d5db; /* Soft light gray for comfortable reading */
            font-size: 16px;
            line-height: 1.5;
        }

        nav {
            background: #18191c; /* Rich charcoal navbar */
            color: #f3f4f6;
            padding: 22px 40px;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: -0.3px;
            border-bottom: 1px solid #27282e;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: #18191c; /* Sophisticated gray card surface */
            border-radius: 16px;
            box-shadow: 0 12px 32px -6px rgba(0, 0, 0, 0.4);
            padding: 32px;
            margin-bottom: 24px;
            border: 1px solid #27282e;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th, td {
            text-align: left;
            padding: 16px 18px;
        }

        th { 
            background: #212226; 
            color: #9ca3af;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        th:first-child { border-top-left-radius: 8px; border-bottom-left-radius: 8px; }
        th:last-child { border-top-right-radius: 8px; border-bottom-right-radius: 8px; }

        td {
            border-bottom: 1px solid #232429;
            font-size: 15px;
            color: #e5e7eb;
        }

        /* --- Clear, High-Contrast Monochrome / Gray Buttons --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .btn:hover {
            transform: translateY(-1px);
            opacity: 0.9;
        }

        /* Distinct monochrome shades & clear text highlights */
        .btn-primary { 
            background: #f3f4f6; /* Bright white-gray for main action */
            color: #111827; 
        }
        
        .btn-edit { 
            background: #4b5563; /* Medium professional gray */
            color: #ffffff; 
        }
        
        .btn-delete { 
            background: #1f2937; /* Dark slate gray with border contrast */
            color: #fca5a5; 
            border: 1px solid #7f1d1d;
        }
        
        .btn-status { 
            background: #374151; /* Clean cool gray */
            color: #ffffff; 
            border: 1px solid #4b5563;
        }

        .status-pending { 
            color: #d1d5db; 
            font-weight: 600; 
            background: #27282e;
            border: 1px solid #3f3f46;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
        }
        
        .status-completed { 
            color: #ffffff; 
            font-weight: 600; 
            background: #111827;
            border: 1px solid #4b5563;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
        }

        form.inline { display: inline; }

        input[type=text], textarea, input[type=date], select {
            width: 100%;
            padding: 12px 16px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1.5px solid #2e2f38;
            background: #121316;
            border-radius: 10px;
            color: #f3f4f6;
            font-size: 15px;
            transition: all 0.2s;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #9ca3af;
            background: #18191c;
            box-shadow: 0 0 0 4px rgba(156, 163, 175, 0.15);
        }

        label { 
            font-weight: 600; 
            font-size: 14px; 
            color: #9ca3af; 
        }

        .alert-success {
            background: #18191c;
            color: #f3f4f6;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            border: 1px solid #4b5563;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav>
        <span>◻️ Task Manager</span>
    </nav>
    
    <div class="container">
        {{-- Flash message shown after add/edit/delete/status actions --}}
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        {{-- Page-specific content goes here --}}
        @yield('content')
    </div>
</body>
</html>