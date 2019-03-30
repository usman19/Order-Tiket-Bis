import dash
import dash_core_components as dcc
import dash_html_components as html

app = dash.Dash()

app.layout = html.Div(children=[
    html.H1(children='Analisis Sentimen Anies Basewedan Dan Sandiaga Uno'),

    html.Div(children='''
        Dash: A web application framework for Python.
    '''),

    dcc.Graph(
        id='example-graph',
        figure={
            'data': [
                {'x': [-1, 0, 1], 'y': [3, 92, 5], 'type': 'line', 'name': 'Anies Baswedan'},
                {'x': [-1, 0, 1], 'y': [1, 98, 2], 'type': 'line', 'name': u'Sandiaga Uno'},
            ],
            'layout': {
                'title': 'Dash Data Visualization'
            }
        }
    )
])

if __name__ == '__main__':
    app.run_server(debug=True)